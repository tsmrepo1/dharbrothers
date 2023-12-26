<x-app-layout>
    <!--sidebar wrapper -->
    @include('inc.sidebar')
    <!--end sidebar wrapper -->

    <!--start header -->
    @include('inc.header')
    <!--end header -->

    @php
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
                            <div class="table table-responsive">
                                @php
                                $order_detail = json_decode($order->order_detail);

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

                                @if($hard_binding_qty > 0)
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="table-dark">
                                                    <th colspan="6" class="text-center">Hard Binding & Printing</th>
                                                </tr>
                                                <tr class="table-dark">
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Copies</th>
                                                    <th scope="col">Colour/ BW</th>
                                                    <th scope="col">1st Copy Rate</th>
                                                    <th scope="col">Additional Copy Rate</th>
                                                    <th scope="col" class="text-right">Cost</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($order_detail->hard_bindings_orders as $hard_order)
                                                @php
                                                $rate = get_binding_rate($hard_order->hard_binding_paper_type, $hard_order->hard_binding_paper_color);
                                                $total = 0;
                                                if($hard_order->hard_binding_qty == 1) {
                                                    $total = $rate['first_page'];
                                                }
                                                else {
                                                    $total = $rate['first_page'] + (($hard_order->hard_binding_qty - 1) * $rate['other_page']);
                                                }
                                                $hard_binding_qty   = $hard_binding_qty + $hard_order->hard_binding_qty;
                                                $hard_binding_price = $hard_binding_price + $total;
                                                @endphp
                                                <tr>
                                                    <td>{{ $hard_order->hard_binding_paper_type }}</td>
                                                    <td>{{ $hard_order->hard_binding_qty }}</td>
                                                    <td>{{ $hard_order->hard_binding_paper_color }}</td>
                                                    <td>{{ $rate["first_page"] }}</td>
                                                    <td>{{ $rate["other_page"] }}</td>
                                                    <td class="text-right">₹ {{$total}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                </tr>
                                            <tfoot>
                                        </table>
                                        <div class="sub_total">
                                            <h4>Sub Total</h4>
                                            <h5>₹ {{$hard_binding_price}}</h5>
                                        </div>
                                    </div>
                                @endif
                            
                                @if($soft_binding_qty > 0)
                                    <h5 class="my-3">Soft Binding &amp; Printing</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th scope="col">Description</th>
                                                <th scope="col">Copies</th>
                                                <th scope="col">Colour/ BW</th>
                                                <th scope="col">1st Copy Rate</th>
                                                <th scope="col">Additional Copy Rate</th>
                                                <th scope="col" class="text-right">Cost</th>
                                            </thead>
                                            <tbody>
                                                @foreach($order_detail->soft_bindings_orders as $soft_order)
                                                @php
                                                $rate = get_binding_rate($soft_order->soft_binding_paper_type, $soft_order->soft_binding_paper_color);
                                                $total = 0;
                                                if($soft_order->soft_binding_qty == 1) {
                                                    $total = $rate['first_page'];
                                                }
                                                else {
                                                    $total = $rate['first_page'] + (($soft_order->soft_binding_qty - 1) * $rate['other_page']);
                                                }
                                                $soft_binding_price = $soft_binding_price + $total;
                                                @endphp
                                                <tr>
                                                    <td>{{ $soft_order->soft_binding_paper_type }}</td>
                                                    <td>{{ $soft_order->soft_binding_paper_color }}</td>
                                                    <td>{{ $soft_order->soft_binding_qty }}</td>
                                                    <td>{{ $rate["first_page"] }}</td>
                                                    <td>{{ $rate["other_page"] }}</td>
                                                    <td class="text-right">₹ {{$total}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="sub_total">
                                            <h4>Sub Total</h4>
                                            <h5>₹ {{$soft_binding_price}}</h5>
                                        </div>
                                    </div>
                                @endif
                            
                                @if($synopsis_binding_qty > 0)
                                    <h5 class="my-3">Synopsis Binding &amp; Printing</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th scope="col">Description</th>
                                                <th scope="col">Copies</th>
                                                <th scope="col">Colour/ BW</th>
                                                <th scope="col">1st Copy Rate</th>
                                                <th scope="col">Additional Copy Rate</th>
                                                <th scope="col" class="text-right">Cost</th>
                                            </thead>
                                            <tbody>
                                                @foreach($order_detail->synopsis_bindings_orders as $synopsis_order)
                                                @php
                                                $rate = get_binding_rate($synopsis_order->synopsis_binding_paper_type, $synopsis_order->synopsis_binding_paper_color);
                                                $total = 0;
                                                if($synopsis_order->synopsis_binding_qty == 1) {
                                                    $total = $rate['first_page'];
                                                }
                                                else {
                                                    $total = $rate['first_page'] + (($synopsis_order->synopsis_binding_qty - 1) * $rate['other_page']);
                                                }
                                                $synopsis_binding_price = $synopsis_binding_price + $total;
                                                @endphp
                                                <tr>
                                                    <td>{{ $synopsis_order->synopsis_binding_paper_type }}</td>
                                                    <td>{{ $synopsis_order->synopsis_binding_paper_color }}</td>
                                                    <td>{{ $synopsis_order->synopsis_binding_qty }}</td>
                                                    <td>{{ $rate["first_page"] }}</td>
                                                    <td>{{ $rate["other_page"] }}</td>
                                                    <td class="text-right">₹ {{$total}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="sub_total">
                                            <h4>Sub Total</h4>
                                            <h5>₹ {{$synopsis_binding_price}}</h5>
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
    </div>
    <!--end page wrapper -->
    @include('inc.footer')
</x-app-layout>