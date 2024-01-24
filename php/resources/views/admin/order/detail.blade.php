<x-app-layout>
    <!--sidebar wrapper -->
    @include('inc.sidebar')
    <!--end sidebar wrapper -->

    <!--start header -->
    @include('inc.header')
    <!--end header -->

    @php
        if (!function_exists('get_binding_rate')) {
            function get_binding_rate($paper_type, $color)
            {
                if ($paper_type == 'Paper One 100 GSM or Equivalent') {
                    if ($color == 'Normal - Black & White') {
                        return ['first_page' => 6, 'other_page' => 2];
                    } elseif ($color == 'Normal - Color') {
                        return ['first_page' => 10, 'other_page' => 8];
                    } elseif ($color == 'Royal - Black & White') {
                        return ['first_page' => 8, 'other_page' => 5];
                    } elseif ($color == 'Royal - Color') {
                        return ['first_page' => 10, 'other_page' => 8];
                    } else {
                        return ['first_page' => 0, 'other_page' => 0];
                    }
                } elseif ($paper_type == 'Bond Paper 85 GSM or Equivalent') {
                    if ($color == 'Normal - Black & White') {
                        return ['first_page' => 6, 'other_page' => 2];
                    } elseif ($color == 'Normal - Color') {
                        return ['first_page' => 10, 'other_page' => 8];
                    } elseif ($color == 'Royal - Black & White') {
                        return ['first_page' => 8, 'other_page' => 5];
                    } elseif ($color == 'Royal - Color') {
                        return ['first_page' => 10, 'other_page' => 8];
                    } else {
                        return ['first_page' => 0, 'other_page' => 0];
                    }
                } else {
                    if ($color == 'Normal - Black & White') {
                        return ['first_page' => 5, 'other_page' => 1.5];
                    } elseif ($color == 'Normal - Color') {
                        return ['first_page' => 10, 'other_page' => 8];
                    } elseif ($color == 'Royal - Black & White') {
                        return ['first_page' => 6, 'other_page' => 4];
                    } elseif ($color == 'Royal - Color') {
                        return ['first_page' => 10, 'other_page' => 8];
                    } else {
                        return ['first_page' => 0, 'other_page' => 0];
                    }
                }
            }
        }
    @endphp

    @php
        $order_detail = json_decode($order->order_detail);
        $color_page = property_exists($order_detail, 'color_page') ? $order_detail->color_page : '0';
        $bw_page = property_exists($order_detail, 'bw_page') ? $order_detail->bw_page : '0';

        $hard_binding_qty = 0;
        $soft_binding_qty = 0;
        $synopsis_binding_qty = 0;

        $hard_binding_price = 0;
        $soft_binding_price = 0;
        $synopsis_binding_price = 0;
    @endphp

    @foreach ($order_detail->hard_bindings_orders as $hard_order)
        @php
            $hard_binding_qty = $hard_binding_qty + $hard_order->hard_binding_qty;
        @endphp
    @endforeach

    @foreach ($order_detail->soft_bindings_orders as $soft_order)
        @php
            $soft_binding_qty = $soft_binding_qty + $soft_order->soft_binding_qty;
        @endphp
    @endforeach

    @foreach ($order_detail->synopsis_bindings_orders as $synopsis_order)
        @php
            $synopsis_binding_qty = $synopsis_binding_qty + $synopsis_order->synopsis_binding_qty;
        @endphp
    @endforeach

    @php
        $billing_address = json_decode($order->billing_address);
        $shipping_address = json_decode($order->shipping_address);
    @endphp


    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Orders - #{{ $order->order_id }}</div>
            </div>

            <div class="row row-cols-1 row-cols-1">
                <div class="col-md-9">
                    @if (property_exists($order_detail, 'hard_bindings_orders'))
                        @if ($hard_binding_qty > 0)
                            <div class="card border-top border-0 border-4 border-primary p-4">
                                <h6>Hard Printing Details</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Description</th>
                                                <th scope="col">Paper Size</th>
                                                <th scope="col">Colour/ BW</th>
                                                <th scope="col">Printing Type</th>
                                                <th scope="col">A4 Pockets</th>
                                                <th scope="col">CD Pockets</th>
                                                <th scope="col">Information</th>
                                                <th scope="col">Copies</th>
                                                <th scope="col" class="text-right">Cost</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order_detail->hard_bindings_orders as $hard_order)
                                                @php
                                                    $rate = get_binding_rate($hard_order->hard_binding_paper_type, $hard_order->hard_binding_paper_color);
                                                    $total = 0;

                                                    $numberOfColorPage = $color_page;
                                                    $numberOfBWPage = $bw_page;
                                                    $numberOfTotalPage = 0;

                                                    if ($hard_order->hard_binding_paper_color == 'Normal - Black & White' || $hard_order->hard_binding_paper_color == 'Royal - Black & White') {
                                                        $numberOfBWPage = $numberOfBWPage + $numberOfColorPage;
                                                        $numberOfColorPage = 0;
                                                        $numberOfTotalPage = $numberOfBWPage;
                                                    } else {
                                                        $numberOfColorPage = $numberOfColorPage + $numberOfBWPage;
                                                        $numberOfBWPage = 0;
                                                        $numberOfTotalPage = $numberOfColorPage;
                                                    }

                                                    // Calculate Page Printing Price
                                                    if ($hard_order->hard_binding_qty == 1) {
                                                        $total += $numberOfTotalPage * $rate['first_page'];
                                                    } elseif ($hard_order->hard_binding_qty > 1) {
                                                        $total += $numberOfTotalPage * $rate['first_page'];

                                                        $total += ($hard_order->hard_binding_qty - 1) * $numberOfTotalPage * $rate['other_page'];
                                                    } else {
                                                        $total += 0;
                                                    }

                                                    // Calculate Binding Price
                                                    if ($hard_order->hard_binding_qty < 3) {
                                                        $total += $hard_order->hard_binding_qty * 300;
                                                    } elseif ($hard_order->hard_binding_qty >= 3) {
                                                        $total += $hard_order->hard_binding_qty * 270;
                                                    } else {
                                                        $total += 0;
                                                    }

                                                    $hard_binding_qty = $hard_binding_qty + $hard_order->hard_binding_qty;
                                                    $hard_binding_price = $hard_binding_price + $total;
                                                @endphp
                                                <tr>
                                                    @if (isset($hard_order->hard_binding_paper_type))
                                                        <td>{{ $hard_order->hard_binding_paper_type }}</td>
                                                    @endif
                                                    @if (isset($hard_order->hard_binding_paper_size))
                                                        <td>{{ $hard_order->hard_binding_paper_size }}</td>
                                                    @endif
                                                    @if (isset($hard_order->hard_binding_paper_color))
                                                        <td>{{ $hard_order->hard_binding_paper_color }}
                                                        </td>
                                                    @endif
                                                    @if (isset($hard_order->hard_binding_printing_type))
                                                        <td>{{ $hard_order->hard_binding_printing_type }}
                                                        </td>
                                                    @endif
                                                    @if (isset($hard_order->hard_binding_a4_pockets))
                                                        <td>{{ $hard_order->hard_binding_a4_pockets }}</td>
                                                    @endif
                                                    @if (isset($hard_order->hard_binding_cd_pockets))
                                                        <td>{{ $hard_order->hard_binding_cd_pockets }}</td>
                                                    @endif
                                                    @if (isset($hard_order->hard_binding_information))
                                                        <td>{{ $hard_order->hard_binding_information }}
                                                        </td>
                                                    @endif
                                                    @if (isset($hard_order->hard_binding_qty))
                                                        <td>{{ $hard_order->hard_binding_qty }}</td>
                                                    @endif
                                                    <td class="text-right">₹ {{ $total }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="8">Total</td>
                                                <td>₹ {{ $hard_binding_price }}</td>
                                            </tr>
                                        <tfoot>
                                    </table>
                                </div>

                                <div class="my-3">
                                    <p>Cover DB:
                                        {{ $order_detail->hard_binding_other_details->hard_binding_cover_color_db ?? '' }}
                                    </p>
                                    <p>Cover Text Color:
                                        {{ $order_detail->hard_binding_other_details->hard_binding_cover_text_color ?? '' }}
                                    </p>
                                    <p>Cover Design: <a class="btn btn-sm btn-info" target="_blank"
                                            href="{{ url('storage') }}/{{ $order_detail->hard_binding_other_details->hard_binding_cover_design ?? '' }}">View</a>
                                    </p>
                                    <p>Spine Printing:
                                        {{ $order_detail->hard_binding_other_details->hard_binding_spine ?? '' }}
                                    </p>
                                    <p>Spine Top Content:
                                        {{ $order_detail->hard_binding_other_details->hard_binding_spine_top_content ?? '' }}
                                    </p>
                                    <p>Spine Middle Content:
                                        {{ $order_detail->hard_binding_other_details->hard_binding_spine_middle_content ?? '' }}
                                    </p>
                                    <p>Spine Bottom Content:
                                        {{ $order_detail->hard_binding_other_details->hard_binding_spine_bottom_content ?? '' }}
                                    </p>

                                </div>
                            </div>
                        @endif
                    @endif

                    @if (property_exists($order_detail, 'soft_bindings_orders'))
                        @if ($soft_binding_qty > 0)
                            <div class="card border-top border-0 border-4 border-primary p-4">
                                <h6>Soft Printing Details</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Description</th>
                                                <th scope="col">Paper Size</th>
                                                <th scope="col">Colour/ BW</th>
                                                <th scope="col">Printing Type</th>
                                                <th scope="col">A4 Pockets</th>
                                                <th scope="col">CD Pockets</th>
                                                <th scope="col">Information</th>
                                                <th scope="col">Copies</th>
                                                <th scope="col" class="text-right">Cost</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order_detail->soft_bindings_orders as $soft_order)
                                                @php
                                                    $rate = get_binding_rate($soft_order->soft_binding_paper_type, $soft_order->soft_binding_paper_color);
                                                    $total = 0;

                                                    $numberOfColorPage = $color_page;
                                                    $numberOfBWPage = $bw_page;
                                                    $numberOfTotalPage = 0;

                                                    if ($soft_order->soft_binding_paper_color == 'Normal - Black & White' || $soft_order->soft_binding_paper_color == 'Royal - Black & White') {
                                                        $numberOfBWPage = $numberOfBWPage + $numberOfColorPage;
                                                        $numberOfColorPage = 0;
                                                        $numberOfTotalPage = $numberOfBWPage;
                                                    } else {
                                                        $numberOfColorPage = $numberOfColorPage + $numberOfBWPage;
                                                        $numberOfBWPage = 0;
                                                        $numberOfTotalPage = $numberOfColorPage;
                                                    }

                                                    // Calculate Page Printing Price
                                                    if ($soft_order->soft_binding_qty == 1) {
                                                        $total += $numberOfTotalPage * $rate['first_page'];
                                                    } elseif ($soft_order->soft_binding_qty > 1) {
                                                        $total += $numberOfTotalPage * $rate['first_page'];

                                                        $total += ($soft_order->soft_binding_qty - 1) * $numberOfTotalPage * $rate['other_page'];
                                                    } else {
                                                        $total += 0;
                                                    }

                                                    // Calculate Binding Price
                                                    $total += $soft_order->soft_binding_qty * 270;

                                                    $soft_binding_qty = $soft_binding_qty + $soft_order->soft_binding_qty;
                                                    $soft_binding_price = $soft_binding_price + $total;
                                                @endphp
                                                <tr>
                                                    @if (isset($soft_order->soft_binding_paper_type))
                                                        <td>{{ $soft_order->soft_binding_paper_type }}</td>
                                                    @endif
                                                    @if (isset($soft_order->soft_binding_paper_size))
                                                        <td>{{ $soft_order->soft_binding_paper_size }}</td>
                                                    @endif
                                                    @if (isset($soft_order->soft_binding_paper_color))
                                                        <td>{{ $soft_order->soft_binding_paper_color }}
                                                        </td>
                                                    @endif
                                                    @if (isset($soft_order->soft_binding_printing_type))
                                                        <td>{{ $soft_order->soft_binding_printing_type }}
                                                        </td>
                                                    @endif
                                                    @if (isset($soft_order->soft_binding_a4_pockets))
                                                        <td>{{ $soft_order->soft_binding_a4_pockets }}</td>
                                                    @endif
                                                    @if (isset($soft_order->soft_binding_cd_pockets))
                                                        <td>{{ $soft_order->soft_binding_cd_pockets }}</td>
                                                    @endif
                                                    @if (isset($soft_order->soft_binding_information))
                                                        <td>{{ $soft_order->soft_binding_information }}
                                                        </td>
                                                    @endif
                                                    @if (isset($soft_order->soft_binding_qty))
                                                        <td>{{ $soft_order->soft_binding_qty }}</td>
                                                    @endif
                                                    <td class="text-right">₹ {{ $total }}</td>
                                                </tr>
                                            @endforeach

                                        <tfoot>
                                            <tr>
                                                <td colspan="8">Total</td>
                                                <td>₹ {{ $soft_binding_price }}</td>
                                            </tr>
                                        <tfoot>
                                    </table>
                                </div>

                                <div class="my-3">
                                    <p>Cover DB:
                                        {{ $order_detail->soft_binding_other_details->soft_binding_cover_color_db ?? '' }}
                                    </p>
                                    <p>Cover Text Color:
                                        {{ $order_detail->soft_binding_other_details->soft_binding_cover_text_color ?? '' }}
                                    </p>
                                    <p>Cover Design: <a class="btn btn-sm btn-info" target="_blank"
                                            href="{{ url('storage') }}/{{ $order_detail->soft_binding_other_details->soft_binding_cover_design ?? '' }}">View</a>
                                    </p>
                                    <p>Spine Printing:
                                        {{ $order_detail->soft_binding_other_details->soft_binding_spine ?? '' }}
                                    </p>
                                    <p>Spine Top Content:
                                        {{ $order_detail->soft_binding_other_details->soft_binding_spine_top_content ?? '' }}
                                    </p>
                                    <p>Spine Middle Content:
                                        {{ $order_detail->soft_binding_other_details->soft_binding_spine_middle_content ?? '' }}
                                    </p>
                                    <p>Spine Bottom Content:
                                        {{ $order_detail->soft_binding_other_details->soft_binding_spine_bottom_content ?? '' }}
                                    </p>

                                </div>
                            </div>
                        @endif
                    @endif

                    @if (property_exists($order_detail, 'synopsis_bindings_orders'))
                        @if ($synopsis_binding_qty > 0)
                            <div class="card border-top border-0 border-4 border-primary p-4">
                                <h6>Synopsis Printing Details</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Description</th>
                                                <th scope="col">Paper Size</th>
                                                <th scope="col">Colour/ BW</th>
                                                <th scope="col">Printing Type</th>
                                                <th scope="col">Copies</th>
                                                <th scope="col" class="text-right">Cost</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order_detail->synopsis_bindings_orders as $synopsis_order)
                                                @php
                                                    $rate = get_binding_rate($synopsis_order->synopsis_binding_paper_type, $synopsis_order->synopsis_binding_paper_color);
                                                    $total = 0;

                                                    $numberOfColorPage = $color_page;
                                                    $numberOfBWPage = $bw_page;
                                                    $numberOfTotalPage = 0;

                                                    if ($synopsis_order->synopsis_binding_paper_color == 'Normal - Black & White' || $synopsis_order->synopsis_binding_paper_color == 'Royal - Black & White') {
                                                        $numberOfBWPage = $numberOfBWPage + $numberOfColorPage;
                                                        $numberOfColorPage = 0;
                                                        $numberOfTotalPage = $numberOfBWPage;
                                                    } else {
                                                        $numberOfColorPage = $numberOfColorPage + $numberOfBWPage;
                                                        $numberOfBWPage = 0;
                                                        $numberOfTotalPage = $numberOfColorPage;
                                                    }

                                                    // Calculate Page Printing Price
                                                    if ($synopsis_order->synopsis_binding_qty == 1) {
                                                        $total += $numberOfTotalPage * $rate['first_page'];
                                                    } elseif ($synopsis_order->synopsis_binding_qty > 1) {
                                                        $total += $numberOfTotalPage * $rate['first_page'];

                                                        $total += ($synopsis_order->synopsis_binding_qty - 1) * $numberOfTotalPage * $rate['other_page'];
                                                    } else {
                                                        $total += 0;
                                                    }

                                                    // Calculate Binding Price
                                                    $total += $synopsis_order->synopsis_binding_qty * 30;

                                                    $synopsis_binding_qty = $synopsis_binding_qty + $synopsis_order->synopsis_binding_qty;
                                                    $synopsis_binding_price = $synopsis_binding_price + $total;
                                                @endphp
                                                <tr>
                                                    @if (isset($synopsis_order->synopsis_binding_paper_type))
                                                        <td>{{ $synopsis_order->synopsis_binding_paper_type }}
                                                        </td>
                                                    @endif
                                                    @if (isset($synopsis_order->synopsis_binding_paper_size))
                                                        <td>{{ $synopsis_order->synopsis_binding_paper_size }}
                                                        </td>
                                                    @endif
                                                    @if (isset($synopsis_order->synopsis_binding_paper_color))
                                                        <td>{{ $synopsis_order->synopsis_binding_paper_color }}
                                                        </td>
                                                    @endif
                                                    @if (isset($synopsis_order->synopsis_binding_printing_type))
                                                        <td>{{ $synopsis_order->synopsis_binding_printing_type }}
                                                        </td>
                                                    @endif
                                                    @if (isset($synopsis_order->synopsis_binding_qty))
                                                        <td>{{ $synopsis_order->synopsis_binding_qty }}
                                                        </td>
                                                    @endif
                                                    <td class="text-right">₹ {{ $total }}</td>
                                                </tr>
                                            @endforeach

                                        <tfoot>
                                            <tr>
                                                <td colspan="5">Total</td>
                                                <td>₹ {{ $synopsis_binding_price }}</td>
                                            </tr>
                                        <tfoot>
                                    </table>
                                </div>

                                <div class="my-3">

                                </div>
                            </div>
                        @endif
                    @endif
                </div>

                <div class="col-md-3">
                    <div class="card border-top border-0 border-4 border-primary mb-4">
                        <div class="card-body p-5">
                            <h6>Order Details</h6>
                            <p>Order ID: {{ $order->order_id }}</p>
                            <p>Order Date: {{ date('d-m-Y', strtotime($order->created_at)) }}</p>
                            <p>Order Amount: {{ $order->order_amount }}</p>
                            <p>Payment Status: {{ $order->payment_status }}</p>
                            <p>Transaction ID: {{ $order->transaction_id }}</p>
                        </div>
                    </div>

                    <div class="card border-top border-0 border-4 border-primary mb-4">
                        <div class="card-body p-5">
                            <h6>Customer Details</h6>
                            <p>Name: {{ $order->user_name }}</p>
                            <p>Email: {{ $order->user_email }}</p>
                            <p>Phone: {{ $order->user_phone }}</p>
                        </div>
                    </div>

                    <div class="card border-top border-0 border-4 border-primary mb-4">
                        <div class="card-body p-5">
                            <h6>Billing Details</h6>
                            <p>Billing Street: {{ $billing_address->billing_street }}</p>
                            <p>Billing Apartment: {{ $billing_address->billing_apartment }}</p>
                            <p>Billing Country: {{ $billing_address->billing_country }}</p>
                            <p>Billing City: {{ $billing_address->billing_city }}</p>
                            <p>Billing State: {{ $billing_address->billing_state }}</p>
                            <p>Billing PIN: {{ $billing_address->billing_pin }}</p>
                        </div>
                    </div>

                    @if ($shipping_address)
                    <div class="card border-top border-0 border-4 border-primary mb-4">
                        <div class="card-body p-5">
                            <h6>Shipping Details</h6>
                            <p>Shipping Street: {{ $shipping_address->shipping_street }}</p>
                            <p>Shipping Apartment: {{ $shipping_address->shipping_apartment }}</p>
                            <p>Shipping Country: {{ $shipping_address->shipping_country }}</p>
                            <p>Shipping City: {{ $shipping_address->shipping_city }}</p>
                            <p>Shipping State:{{ $shipping_address->shipping_state }} </p>
                            <p>Shipping PIN: {{ $shipping_address->shipping_pin }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!--end breadcrumb-->
            <div class="row row-cols-1 row-cols-1">
                <div class="col">

                    <div class="card border-top border-0 border-4 border-primary p-5">
                        <div class="documents-for-approval">
                            <h6>Documents for Approval</h6>

                            <form action="{{ route('doc.uploading') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="file-upload-wrapper">
                                    <input type="hidden" name="order_id" value="{{ $order->order_id }}">

                                    @if ($hard_binding_qty > 0 || $soft_binding_qty > 0)
                                        
                                        <label class="form-label">Thesis Main Document:</label>
                                        <input class="form-control mb-4" type="file" name="thesis_main_doc" required>
                                        
                                        @if ($hard_binding_qty > 0)
                                            <label class="form-label">Hard Copy cover Design:</label>
                                            <input class="form-control mb-4" type="file" name="hard_cover_design" required>
                                        @endif
                                        @if ($soft_binding_qty > 0)
                                            <label class="form-label">Upload Soft Copy cover Design:</label>
                                            <input class="form-control mb-4" type="file" name="soft_cover_design" required>
                                        @endif
                                    @endif
                                    
                                    @if ($synopsis_binding_qty > 0)
                                        <label class="form-label">Upload Synopsis Cover Design:</label>
                                        <input class="form-control mb-4" type="file" name="synopsis_cover_design" required>
                                        
                                        <label class="form-label">Upload Synopsis:</label>
                                        <input class="form-control mb-4" type="file" name="synopsis_main_doc" required>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-sm btn-primary"
                                    style="padding-top: 10px; padding-bottom: 10px;">Submit For Review</button>
                            </form>

                        </div>
                        @if (!empty($picsdet))
                            <div class="documents-for-approval">
                                <h3>Uploaded for Approval</h3>

                                @php
                                    $firstElement = $picsdet[0];
                                    $allColumnNames = array_keys($firstElement);
                                    $selectedColumnNames = array_slice($allColumnNames, 2, 10);

                                    $modelInstance = new \App\Models\UserdesignModel();
                                @endphp

                                @foreach ($selectedColumnNames as $columnName)
                                    @php
                                        $value = isset($firstElement[$columnName]) ? $firstElement[$columnName] : 'N/A';
                                        $imageUrl = asset('storage/' . $value);
                                        $result = $modelInstance::where('url', $imageUrl)->first();

                                        $fileParts = explode('.', $value);
                                        $fileExtension = end($fileParts);
                                        $fileExtension = strtolower($fileExtension);
                                    @endphp

                                    @if ($columnName == 'thesis_main')
                                        <span>Thesis Main Document</span>
                                        @if ($fileExtension === 'pdf')
                                            <iframe src="{{ $imageUrl }}" style="width: 100px; height: 200px;"
                                                frameborder="0"></iframe>
                                        @else
                                            <img src="{{ $imageUrl }}" style="width: 100px; height: 200px;"
                                                alt="Preview" />
                                        @endif
                                    @elseif ($columnName == 'thesis_hard_cover')
                                        <span>Thesis Hard Cover Design</span>
                                        @if ($fileExtension === 'pdf')
                                            <iframe src="{{ $imageUrl }}" style="width: 100px; height: 200px;"
                                                frameborder="0"></iframe>
                                        @else
                                            <img src="{{ $imageUrl }}" style="width: 100px; height: 200px;"
                                                alt="Preview" />
                                        @endif
                                    @elseif ($columnName == 'thesis_soft_cover')
                                        <span>Thesis Soft Cover Design</span>
                                        @if ($fileExtension === 'pdf')
                                            <iframe src="{{ $imageUrl }}" style="width: 100px; height: 200px;"
                                                frameborder="0"></iframe>
                                        @else
                                            <img src="{{ $imageUrl }}" style="width: 100px; height: 200px;"
                                                alt="Preview" />
                                        @endif
                                    @elseif ($columnName == 'synopsis_main')
                                        <span>Synopsis Main Documents</span>
                                        @if ($fileExtension === 'pdf')
                                            <iframe src="{{ $imageUrl }}" style="width: 100px; height: 200px;"
                                                frameborder="0"></iframe>
                                        @else
                                            <img src="{{ $imageUrl }}" style="width: 100px; height: 200px;"
                                                alt="Preview" />
                                        @endif
                                    @elseif ($columnName == 'synopsis_cover')
                                        <span>Synopsis Cover</span>
                                        @if ($fileExtension === 'pdf')
                                            <iframe src="{{ $imageUrl }}" style="width: 100px; height: 200px;"
                                                frameborder="0"></iframe>
                                        @else
                                            <img src="{{ $imageUrl }}" style="width: 100px; height: 200px;"
                                                alt="Preview" />
                                        @endif
                                    @endif

                                    {{-- Display status and reason --}}
                                    @if ($result)
                                        @if ($result->status == 'Accepted')
                                            <div style="color: green;">Accept</div>
                                        @elseif ($result->status == 'Rejected')
                                            <div style="color: red;">Reject</div>
                                            <div>Reason: {{ $result->reason }}</div>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--end page wrapper -->
    @include('inc.footer')
</x-app-layout>
