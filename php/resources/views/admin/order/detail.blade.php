<x-app-layout>
    <!--sidebar wrapper -->
    @include('inc.sidebar')
    <!--end sidebar wrapper -->

    <!--start header -->
    @include('inc.header')
    <!--end header -->

    @php
    if (!function_exists('get_binding_rate')) {
        function get_binding_rate($paper_type, $color) {
            if ($paper_type == "Paper One 100 GSM or Equivalent") {
                if ($color == "Normal - Black & White") {
                    return ["first_page" => 6, "other_page" => 2];
                } else if ($color == "Normal - Color") {
                    return ["first_page" => 10, "other_page" => 8];
                } else if ($color == "Royal - Black & White") {
                    return ["first_page" => 8, "other_page" => 5];
                } else if ($color == "Royal - Color") {
                    return ["first_page" => 10, "other_page" => 8];
                } else {
                    return ["first_page" => 0, "other_page" => 0];
                }
            } else if ($paper_type == "Bond Paper 85 GSM or Equivalent") {
                if ($color == "Normal - Black & White") {
                    return ["first_page" => 6, "other_page" => 2];
                } else if ($color == "Normal - Color") {
                    return ["first_page" => 10, "other_page" => 8];
                } else if ($color == "Royal - Black & White") {
                    return ["first_page" => 8, "other_page" => 5];
                } else if ($color == "Royal - Color") {
                    return ["first_page" => 10, "other_page" => 8];
                } else {
                    return ["first_page" => 0, "other_page" => 0];
                }
            } else {
                if ($color == "Normal - Black & White") {
                    return ["first_page" => 5, "other_page" => 1.5];
                } else if ($color == "Normal - Color") {
                    return ["first_page" => 10, "other_page" => 8];
                } else if ($color == "Royal - Black & White") {
                    return ["first_page" => 6, "other_page" => 4];
                } else if ($color == "Royal - Color") {
                    return ["first_page" => 10, "other_page" => 8];
                } else {
                    return ["first_page" => 0, "other_page" => 0];
                }
            }
        }
    }
    @endphp


    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Orders</div>
            </div>
            <!--end breadcrumb-->
            <div class="row row-cols-1 row-cols-1">
                <div class="col">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <h4>Order</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <p>Name: {{$order->user_name}}</p>
                                    <p>Email: {{$order->user_email}}</p>
                                    <p>Phone: {{$order->user_phone}}</p>
                                </div>
                                <div class="col-md-3">
                                    <p>Order ID: {{$order->order_id}}</p>
                                    <p>Order Date: {{date('d-m-Y', strtotime($order->created_at))}}</p>
                                    <p>Order Amount: {{$order->order_amount}}</p>
                                    <p>Payment Status: {{$order->payment_status}}</p>
                                    <p>Transaction ID: {{$order->transaction_id}}</p>
                                </div>
                                <div class="col-md-3">
                                    @php
                                        $billing_address = json_decode($order->billing_address);
                                        $shipping_address = json_decode($order->shipping_address);
                                    @endphp
                                    <p>Billing Street: {{$billing_address->billing_street}}</p>
                                    <p>Billing Apartment: {{$billing_address->billing_apartment}}</p>
                                    <p>Billing Country: {{$billing_address->billing_country}}</p>
                                    <p>Billing City: {{$billing_address->billing_city}}</p>
                                    <p>Billing State: {{$billing_address->billing_state}}</p>
                                    <p>Billing PIN: {{$billing_address->billing_pin}}</p>
                                </div>
                                <div class="col-md-3">
                                    <p>Shipping Street: {{$shipping_address->shipping_street}}</p>
                                    <p>Shipping Apartment: {{$shipping_address->shipping_apartment}}</p>
                                    <p>Shipping Country: {{$shipping_address->shipping_country}}</p>
                                    <p>Shipping City: {{$shipping_address->shipping_city}}</p>
                                    <p>Shipping State:{{$shipping_address->shipping_state}} </p>
                                    <p>Shipping PIN: {{$shipping_address->shipping_pin}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <h4>Printing and Binding Details</h4>
                                @php
                                $order_detail = json_decode($order->order_detail);
                                $color_page = $order_detail->color_page;
                                $bw_page = $order_detail->bw_page;

                                $hard_binding_qty = 0;
                                $soft_binding_qty = 0;
                                $synopsis_binding_qty = 0;

                                $hard_binding_price = 0;
                                $soft_binding_price = 0;
                                $synopsis_binding_price = 0;
                                @endphp

                                @foreach($order_detail->hard_bindings_orders as $hard_order)
                                @php
                                $hard_binding_qty = $hard_binding_qty + $hard_order->hard_binding_qty;
                                @endphp
                                @endforeach

                                @foreach($order_detail->soft_bindings_orders as $soft_order)
                                @php
                                $soft_binding_qty = $soft_binding_qty + $soft_order->soft_binding_qty;
                                @endphp
                                @endforeach

                                @foreach($order_detail->synopsis_bindings_orders as $synopsis_order)
                                @php
                                $synopsis_binding_qty = $synopsis_binding_qty + $synopsis_order->synopsis_binding_qty;
                                @endphp
                                @endforeach

                                <p>Thesis File: <a class="btn btn-sm btn-info" target="_blank" href="{{url('storage')}}/{{$order_detail->thesis_file}}">View</a></p>
                                @if($hard_binding_qty > 0)
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="table-dark">
                                                        <th colspan="9" class="text-center">Hard Binding & Printing</th>
                                                    </tr>
                                                    <tr class="table-dark">
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
                                                    @foreach($order_detail->hard_bindings_orders as $hard_order)
                                                    @php
                                                    $rate = get_binding_rate($hard_order->hard_binding_paper_type, $hard_order->hard_binding_paper_color);
                                                    $total = 0;

                                                    $numberOfColorPage = $color_page;
                                                    $numberOfBWPage = $bw_page;
                                                    $numberOfTotalPage = 0;

                                                    if ($hard_order->hard_binding_paper_color == "Normal - Black & White" || $hard_order->hard_binding_paper_color == "Royal - Black & White") {
                                                        $numberOfBWPage = $numberOfBWPage + $numberOfColorPage;
                                                        $numberOfColorPage = 0;
                                                        $numberOfTotalPage = $numberOfBWPage;
                                                    }
                                                    else {
                                                        $numberOfColorPage = $numberOfColorPage + $numberOfBWPage;
                                                        $numberOfBWPage = 0;
                                                        $numberOfTotalPage = $numberOfColorPage;
                                                    }

                                                    // Calculate Page Printing Price
                                                    if ($hard_order->hard_binding_qty == 1) 
                                                    {
                                                        $total += $numberOfTotalPage * $rate['first_page'];
                                                    } 
                                                    elseif ($hard_order->hard_binding_qty > 1) 
                                                    {
                                                        $total += $numberOfTotalPage * $rate['first_page'];

                                                        $total += (($hard_order->hard_binding_qty - 1) * $numberOfTotalPage) * $rate['other_page'];
                                                    }
                                                    else 
                                                    {
                                                        $total += 0;
                                                    }

                                                    // Calculate Binding Price
                                                    if ($hard_order->hard_binding_qty < 3) 
                                                    {
                                                        $total += $hard_order->hard_binding_qty * 300;
                                                    } 
                                                    elseif ($hard_order->hard_binding_qty >= 3) 
                                                    {
                                                        $total += $hard_order->hard_binding_qty * 270;
                                                    }
                                                    else 
                                                    {
                                                        $total += 0;
                                                    }

                                                    $hard_binding_qty   = $hard_binding_qty + $hard_order->hard_binding_qty;
                                                    $hard_binding_price = $hard_binding_price + $total;
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $hard_order->hard_binding_paper_type }}</td>
                                                        <td>{{ $hard_order->hard_binding_paper_size }}</td>
                                                        <td>{{ $hard_order->hard_binding_paper_color }}</td>
                                                        <td>{{ $hard_order->hard_binding_printing_type }}</td>
                                                        <td>{{ $hard_order->hard_binding_a4_pockets }}</td>
                                                        <td>{{ $hard_order->hard_binding_cd_pockets }}</td>
                                                        <td>{{ $hard_order->hard_binding_information }}</td>
                                                        <td>{{ $hard_order->hard_binding_qty }}</td>
                                                        <td class="text-right">₹ {{$total}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="8">Total</td>
                                                        <td>₹ {{$hard_binding_price}}</td>
                                                    </tr>
                                                <tfoot>
                                            </table>
                                        </div>

                                        <div class="my-3">
                                            <p>Cover DB: {{$order_detail->hard_binding_other_details->hard_binding_cover_color_db ?? ""}}</p>
                                            <p>Cover Text Color: {{$order_detail->hard_binding_other_details->hard_binding_cover_text_color ?? ""}}</p>
                                            <p>Cover Design: <a class="btn btn-sm btn-info" target="_blank" href="{{url('storage')}}/{{$order_detail->hard_binding_other_details->hard_binding_cover_design ?? ""}}">View</a></p>
                                            <p>Spine Printing: {{$order_detail->hard_binding_other_details->hard_binding_spine ?? ""}}</p>
                                            <p>Spine Top Content: {{ $order_detail->hard_binding_other_details->hard_binding_spine_top_content ?? ""}}</p>
                                            <p>Spine Middle Content: {{ $order_detail->hard_binding_other_details->hard_binding_spine_middle_content ?? "" }}</p>
                                            <p>Spine Bottom Content: {{ $order_detail->hard_binding_other_details->hard_binding_spine_bottom_content ?? ""}}</p>
                                        </div>
                                    </div>
                                @endif
                            
                                @if($soft_binding_qty > 0)
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="table-dark">
                                                        <th colspan="9" class="text-center">Soft Binding & Printing</th>
                                                    </tr>
                                                    <tr class="table-dark">
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
                                                    @foreach($order_detail->soft_bindings_orders as $soft_order)
                                                    @php
                                                    $rate = get_binding_rate($soft_order->soft_binding_paper_type, $soft_order->soft_binding_paper_color);
                                                    $total = 0;

                                                    $numberOfColorPage = $color_page;
                                                    $numberOfBWPage = $bw_page;
                                                    $numberOfTotalPage = 0;

                                                    if ($soft_order->soft_binding_paper_color == "Normal - Black & White" || $soft_order->soft_binding_paper_color == "Royal - Black & White") {
                                                        $numberOfBWPage = $numberOfBWPage + $numberOfColorPage;
                                                        $numberOfColorPage = 0;
                                                        $numberOfTotalPage = $numberOfBWPage;
                                                    }
                                                    else {
                                                        $numberOfColorPage = $numberOfColorPage + $numberOfBWPage;
                                                        $numberOfBWPage = 0;
                                                        $numberOfTotalPage = $numberOfColorPage;
                                                    }

                                                    // Calculate Page Printing Price
                                                    if ($soft_order->soft_binding_qty == 1) 
                                                    {
                                                        $total += $numberOfTotalPage * $rate['first_page'];
                                                    } 
                                                    elseif ($soft_order->soft_binding_qty > 1) 
                                                    {
                                                        $total += $numberOfTotalPage * $rate['first_page'];

                                                        $total += (($soft_order->soft_binding_qty - 1) * $numberOfTotalPage) * $rate['other_page'];
                                                    }
                                                    else 
                                                    {
                                                        $total += 0;
                                                    }

                                                    // Calculate Binding Price
                                                    $total += $soft_order->soft_binding_qty * 270;

                                                    $soft_binding_qty   = $soft_binding_qty + $soft_order->soft_binding_qty;
                                                    $soft_binding_price = $soft_binding_price + $total;
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $soft_order->soft_binding_paper_type }}</td>
                                                        <td>{{ $soft_order->soft_binding_paper_size }}</td>
                                                        <td>{{ $soft_order->soft_binding_paper_color }}</td>
                                                        <td>{{ $soft_order->soft_binding_printing_type }}</td>
                                                        <td>{{ $soft_order->soft_binding_a4_pockets }}</td>
                                                        <td>{{ $soft_order->soft_binding_cd_pockets }}</td>
                                                        <td>{{ $soft_order->soft_binding_information }}</td>
                                                        <td>{{ $soft_order->soft_binding_qty }}</td>
                                                        <td class="text-right">₹ {{$total}}</td>
                                                    </tr>
                                                    @endforeach
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="8">Total</td>
                                                            <td>₹ {{$soft_binding_price}}</td>
                                                        </tr>
                                                    <tfoot>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="my-3">
                                            <p>Cover DB: {{$order_detail->soft_binding_other_details->soft_binding_cover_color_db ?? ""}}</p>
                                            <p>Cover Text Color: {{$order_detail->soft_binding_other_details->soft_binding_cover_text_color ?? ""}}</p>
                                            <p>Cover Design: <a class="btn btn-sm btn-info" target="_blank" href="{{url('storage')}}/{{$order_detail->soft_binding_other_details->soft_binding_cover_design ?? ""}}">View</a></p>
                                            <p>Spine Printing: {{$order_detail->soft_binding_other_details->soft_binding_spine ?? ""}}</p>
                                            <p>Spine Top Content: {{ $order_detail->soft_binding_other_details->soft_binding_spine_top_content ?? ""}}</p>
                                            <p>Spine Middle Content: {{ $order_detail->soft_binding_other_details->soft_binding_spine_middle_content ?? "" }}</p>
                                            <p>Spine Bottom Content: {{ $order_detail->soft_binding_other_details->soft_binding_spine_bottom_content ?? ""}}</p>
                                        </div>
                                    </div>
                                @endif
                            
                                @if($synopsis_binding_qty > 0)
                                <div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="table-dark">
                                                    <th colspan="9" class="text-center">Synopsis Binding & Printing</th>
                                                </tr>
                                                <tr class="table-dark">
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Paper Size</th>
                                                    <th scope="col">Colour/ BW</th>
                                                    <th scope="col">Printing Type</th>
                                                    <th scope="col">Copies</th>
                                                    <th scope="col" class="text-right">Cost</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($order_detail->synopsis_bindings_orders as $synopsis_order)
                                                @php
                                                $rate = get_binding_rate($synopsis_order->synopsis_binding_paper_type, $synopsis_order->synopsis_binding_paper_color);
                                                $total = 0;

                                                $numberOfColorPage = $color_page;
                                                $numberOfBWPage = $bw_page;
                                                $numberOfTotalPage = 0;

                                                if ($synopsis_order->synopsis_binding_paper_color == "Normal - Black & White" || $synopsis_order->synopsis_binding_paper_color == "Royal - Black & White") {
                                                    $numberOfBWPage = $numberOfBWPage + $numberOfColorPage;
                                                    $numberOfColorPage = 0;
                                                    $numberOfTotalPage = $numberOfBWPage;
                                                }
                                                else {
                                                    $numberOfColorPage = $numberOfColorPage + $numberOfBWPage;
                                                    $numberOfBWPage = 0;
                                                    $numberOfTotalPage = $numberOfColorPage;
                                                }

                                                // Calculate Page Printing Price
                                                if ($synopsis_order->synopsis_binding_qty == 1) 
                                                {
                                                    $total += $numberOfTotalPage * $rate['first_page'];
                                                } 
                                                elseif ($synopsis_order->synopsis_binding_qty > 1) 
                                                {
                                                    $total += $numberOfTotalPage * $rate['first_page'];

                                                    $total += (($synopsis_order->synopsis_binding_qty - 1) * $numberOfTotalPage) * $rate['other_page'];
                                                }
                                                else 
                                                {
                                                    $total += 0;
                                                }

                                                // Calculate Binding Price
                                                $total += $synopsis_order->synopsis_binding_qty * 30;

                                                $synopsis_binding_qty   = $synopsis_binding_qty + $synopsis_order->synopsis_binding_qty;
                                                $synopsis_binding_price = $synopsis_binding_price + $total;
                                                @endphp
                                                <tr>
                                                    <td>{{ $synopsis_order->synopsis_binding_paper_type }}</td>
                                                    <td>{{ $synopsis_order->synopsis_binding_paper_size }}</td>
                                                    <td>{{ $synopsis_order->synopsis_binding_paper_color }}</td>
                                                    <td>{{ $synopsis_order->synopsis_binding_printing_type }}</td>
                                                    <td>{{ $synopsis_order->synopsis_binding_qty }}</td>
                                                    <td class="text-right">₹ {{$total}}</td>
                                                </tr>
                                                @endforeach
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="5">Total</td>
                                                        <td>₹ {{$synopsis_binding_price}}</td>
                                                    </tr>
                                                <tfoot>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="my-3">
                                        <p>Cover Design: {{$order_detail->synopsis_binding_other_details->synopsis_binding_cover_design ?? ""}}</p>
                                    </div>
                                </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--end page wrapper -->
    @include('inc.footer')
</x-app-layout>