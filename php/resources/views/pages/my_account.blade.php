@extends('layouts.web')

@section('content')
@php
    if(!function_exists("get_binding_rate")) {
        function get_binding_rate($paper_type, $color) {
            if ($paper_type == "Paper One 100 GSM or Equivalent") 
            {
                if ($color == "All Black & White") 
                {
                    return array(
                    'bw'=>      array('first_page'=> 6, 'other_page'=> 2),
                    'color'=>   array('first_page'=> 0, 'other_page'=> 0)
                );
                } 
                else if ($color == "Black & White & Color") 
                {
                    return array(
                    'bw'=>      array('first_page'=> 6, 'other_page'=> 2),
                    'color'=>   array('first_page'=> 10, 'other_page'=> 8)
                );
                } 
                else if ($color == "Royal Print") 
                {
                    return array(
                    'bw'=>      array('first_page'=> 8, 'other_page'=> 5),
                    'color'=>   array('first_page'=> 10, 'other_page'=> 8)
                );
                }
                else 
                {
                    return array(
                    'bw'=>      array('first_page'=> 0, 'other_page'=> 0),
                    'color'=>   array('first_page'=> 0, 'other_page'=> 0)
                );
                }
            } 
            else if ($paper_type == "Bond Paper 85 GSM or Equivalent") 
            {
                if ($color == "All Black & White") 
                {
                    return array(
                    'bw'=>      array('first_page'=> 6, 'other_page'=> 2),
                    'color'=>   array('first_page'=> 0, 'other_page'=> 0)
                );
                } 
                else if ($color == "Black & White & Color") 
                {
                    return array(
                    'bw'=>      array('first_page'=> 6, 'other_page'=> 2),
                    'color'=>   array('first_page'=> 10, 'other_page'=> 8)
                );
                } 
                else if ($color == "Royal Print") 
                {
                    return array(
                    'bw'=>      array('first_page'=> 8, 'other_page'=> 5),
                    'color'=>   array('first_page'=> 10, 'other_page'=> 8)
                );
                }
                else 
                {
                    return array(
                    'bw'=>      array('first_page'=> 0, 'other_page'=> 0),
                    'color'=>   array('first_page'=> 0, 'other_page'=> 0)
                );
                }
            } 
            else 
            {
                if ($color == "All Black & White") 
                {
                    return array(
                    'bw'=>      array('first_page'=> 5, 'other_page'=> 1.5),
                    'color'=>   array('first_page'=> 0, 'other_page'=> 0)
                );
                } 
                else if ($color == "Black & White & Color") 
                {
                    return array(
                    'bw'=>      array('first_page'=> 5, 'other_page'=> 1.5),
                    'color'=>   array('first_page'=> 10, 'other_page'=> 8)
                );
                } 
                else if ($color == "Royal Print") 
                {
                    return array(
                    'bw'=>      array('first_page'=> 6, 'other_page'=> 4),
                    'color'=>   array('first_page'=> 10, 'other_page'=> 8)
                );
                }
                else 
                {
                    return array(
                    'bw'=>      array('first_page'=> 0, 'other_page'=> 0),
                    'color'=>   array('first_page'=> 0, 'other_page'=> 0)
                );
                }
            }
        }
    }
@endphp

@foreach($orders as $order)
@php
$order_detail = json_decode($order->order_detail);

$hard_binding_qty = 0;
$soft_binding_qty = 0;
$synopsis_binding_qty = 0;

$hard_printing_price = 0;
$soft_printing_price = 0;
$synopsis_printing_price = 0;

$hard_binding_price = 0;
$soft_binding_price = 0;
$synopsis_binding_price = 0;

$thesis_color_page = $order_detail->thesis_color_page;
$thesis_bw_page = $order_detail->thesis_bw_page;

$synopsis_color_page = $order_detail->synopsis_color_page;
$synopsis_bw_page = $order_detail->synopsis_bw_page;
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


<!-- offcanvas panel right -->
<aside class="offcanvas offcanvas-right" id="my_offcanvas2">
    <header class="p-4">
        <div class="row">
            <div class="col-8">
                <h5>Order ID #{{$order->order_id}}</h5>
            </div>
            <div class="col-4"></div>
        </div>
        <button class="btn  btn-close"> &times Close </button>
    </header>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
            @if($hard_binding_qty > 0)
                <div class="printing__wrapp p-4 bg-white mt-5">
                    <h3 class="mb-4">Hard Binding &amp; Printing</h3>
                    <div class="printing__Details table-responsive">
                        <p>Print Details</p>
                        <table class="table table-striped">
                            <thead>
                                <th scope="col">Description</th>
                                <th scope="col">Colour/ BW</th>
                                <th scope="col">Copies</th>
                                <th scope="col">1st Copy Rate</th>
                                <th scope="col">Additional Copy Rate</th>
                                <th scope="col" class="text-right">Cost</th>
                            </thead>
                            <tbody>
                                @foreach($order_detail->hard_bindings_orders as $hard_order)
                                @php
                                $rate = get_binding_rate($hard_order->hard_binding_paper_type, $hard_order->hard_binding_paper_color);
                                $total = 0;

                                $number_of_thesis_color_page = $thesis_color_page;
                                $number_of_thesis_bw_page = $thesis_bw_page;
                                $number_of_total_page = 0;

                                if ($hard_order->hard_binding_paper_color == "All Black & White") {
                                    $number_of_thesis_bw_page = $number_of_thesis_bw_page + $number_of_thesis_color_page;
                                    $number_of_thesis_color_page = 0;
                                    $number_of_total_page = $number_of_thesis_bw_page;
                                } 

                                // Calculate Page Printing Price
                                if ($hard_binding_qty == 1) {
                                    $total += ($number_of_thesis_bw_page * $rate['bw']['first_page']) + ($number_of_thesis_color_page * $rate['color']['first_page']);
                                } else if ($hard_binding_qty > 1) {
                                    $total += ($number_of_thesis_bw_page * $rate['bw']['first_page']) + ($number_of_thesis_color_page * $rate['color']['first_page']);

                                    $total += ((($hard_binding_qty - 1) * $number_of_thesis_bw_page) * $rate['bw']['other_page']) + ((($hard_binding_qty - 1) * $number_of_thesis_color_page) * $rate['color']['other_page']);
                                } else {
                                    $total += 0;
                                }

                                $hard_printing_price = $hard_printing_price + $total;

                                @endphp
                                <tr>
                                    <td>{{ $hard_order->hard_binding_paper_type }}</td>
                                    <td>{{ $hard_order->hard_binding_paper_color }}</td>
                                    <td>{{ $hard_order->hard_binding_qty }}</td>
                                    <td>Black & White: {{$rate['bw']['first_page']}}, Color: {{$rate['color']['first_page']}}</td>
                                    <td>Black & White: {{$rate['bw']['other_page']}}, Color: {{$rate['color']['other_page']}}</td>
                                    <td class="text-right">₹ {{$total}} INR</td>
                                </tr>
                                @endforeach
                                @php
                                    if($hard_binding_qty <= 3) {
                                        $hard_binding_price = $hard_binding_qty * 300;
                                    }
                                    else {
                                        $hard_binding_price = (3 * 300) + (($hard_binding_qty - 3) * 270); 
                                    }
                                @endphp
                            </tbody>
                        </table>
                        <div class="sub_total">
                            <h4>Sub Total</h4>
                            <h5>₹ {{$hard_printing_price}} INR</h5>
                        </div>
                        <div class="printing__Details table-responsive">
                            <p>Binding Details <a href="#"
                                data-toggle="tooltip" title="Hooray!">
                                <i class=" fa-solid fa-circle-info"
                                    aria-hidden="true"></i>
                            </a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Description</th>
                                        <th scope="col">Copies</th>
                                        <th scope="col" class="text-right">Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hard Bind</td>
                                        <td>{{$hard_binding_qty}}</td>
                                        <td class="text-right">₹ {{$hard_binding_price}} INR</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif

            @if($soft_binding_qty > 0)
                <div class="printing__wrapp p-4 bg-white mt-5">
                    <h3 class="mb-4">Soft Binding &amp; Printing</h3>
                    <div class="printing__Details table-responsive">
                        <p>Print Details</p>
                        <table class="table table-striped">
                            <thead>
                                <th scope="col">Description</th>
                                <th scope="col">Colour/ BW</th>
                                <th scope="col">Copies</th>
                                <th scope="col">1st Copy Rate</th>
                                <th scope="col">Additional Copy Rate</th>
                                <th scope="col" class="text-right">Cost</th>
                            </thead>
                            <tbody>
                                @foreach($order_detail->soft_bindings_orders as $soft_order)
                                @php
                                $rate = get_binding_rate($soft_order->soft_binding_paper_type, $soft_order->soft_binding_paper_color);
                                $total = 0;

                                $number_of_thesis_color_page = $thesis_color_page;
                                $number_of_thesis_bw_page = $thesis_bw_page;
                                $number_of_total_page = 0;

                                if ($soft_order->soft_binding_paper_color == "All Black & White") {
                                    $number_of_thesis_bw_page = $number_of_thesis_bw_page + $number_of_thesis_color_page;
                                    $number_of_thesis_color_page = 0;
                                    $number_of_total_page = $number_of_thesis_bw_page;
                                } 

                                // Calculate Page Printing Price
                                if ($soft_binding_qty == 1) {
                                    $total += ($number_of_thesis_bw_page * $rate['bw']['first_page']) + ($number_of_thesis_color_page * $rate['color']['first_page']);
                                } else if ($soft_binding_qty > 1) {
                                    $total += ($number_of_thesis_bw_page * $rate['bw']['first_page']) + ($number_of_thesis_color_page * $rate['color']['first_page']);

                                    $total += ((($soft_binding_qty - 1) * $number_of_thesis_bw_page) * $rate['bw']['other_page']) + ((($soft_binding_qty - 1) * $number_of_thesis_color_page) * $rate['color']['other_page']);
                                } else {
                                    $total += 0;
                                }

                                $soft_printing_price = $soft_printing_price + $total;

                                @endphp
                                <tr>
                                    <td>{{ $soft_order->soft_binding_paper_type }}</td>
                                    <td>{{ $soft_order->soft_binding_paper_color }}</td>
                                    <td>{{ $soft_order->soft_binding_qty }}</td>
                                    <td>Black & White: {{$rate['bw']['first_page']}}, Color: {{$rate['color']['first_page']}}</td>
                                    <td>Black & White: {{$rate['bw']['other_page']}}, Color: {{$rate['color']['other_page']}}</td>
                                    <td class="text-right">₹ {{$total}} INR</td>
                                </tr>
                                @endforeach
                                @php
                                    $soft_binding_price = $soft_binding_qty * 270;
                                @endphp
                            </tbody>
                        </table>
                        <div class="sub_total">
                            <h4>Sub Total</h4>
                            <h5>₹ {{$soft_printing_price}} INR</h5>
                        </div>
                        <div class="printing__Details table-responsive">
                            <p>Binding Details <a href="#"
                                data-toggle="tooltip" title="Hooray!">
                                <i class=" fa-solid fa-circle-info"
                                    aria-hidden="true"></i>
                            </a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Description</th>
                                        <th scope="col">Copies</th>
                                        <th scope="col" class="text-right">Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Soft Bind</td>
                                        <td>{{$soft_binding_qty}}</td>
                                        <td class="text-right">₹ {{$soft_binding_price}} INR</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif

            @if($synopsis_binding_qty > 0)
                <div class="printing__wrapp p-4 bg-white mt-5">
                    <h3 class="mb-4">Synopsis Binding &amp; Printing</h3>
                    <div class="printing__Details table-responsive">
                        <p>Print Details</p>
                        <table class="table table-striped">
                            <thead>
                                <th scope="col">Description</th>
                                <th scope="col">Colour/ BW</th>
                                <th scope="col">Copies</th>
                                <th scope="col">1st Copy Rate</th>
                                <th scope="col">Additional Copy Rate</th>
                                <th scope="col" class="text-right">Cost</th>
                            </thead>
                            <tbody>
                                @foreach($order_detail->synopsis_bindings_orders as $synopsis_order)
                                @php
                                $rate = get_binding_rate($synopsis_order->synopsis_binding_paper_type, $synopsis_order->synopsis_binding_paper_color);
                                $total = 0;

                                $number_of_thesis_color_page = $thesis_color_page;
                                $number_of_thesis_bw_page = $thesis_bw_page;
                                $number_of_total_page = 0;

                                if ($synopsis_order->synopsis_binding_paper_color == "All Black & White") {
                                    $number_of_thesis_bw_page = $number_of_thesis_bw_page + $number_of_thesis_color_page;
                                    $number_of_thesis_color_page = 0;
                                    $number_of_total_page = $number_of_thesis_bw_page;
                                } 

                                // Calculate Page Printing Price
                                if ($synopsis_binding_qty == 1) {
                                    $total += ($number_of_thesis_bw_page * $rate['bw']['first_page']) + ($number_of_thesis_color_page * $rate['color']['first_page']);
                                } else if ($synopsis_binding_qty > 1) {
                                    $total += ($number_of_thesis_bw_page * $rate['bw']['first_page']) + ($number_of_thesis_color_page * $rate['color']['first_page']);

                                    $total += ((($synopsis_binding_qty - 1) * $number_of_thesis_bw_page) * $rate['bw']['other_page']) + ((($synopsis_binding_qty - 1) * $number_of_thesis_color_page) * $rate['color']['other_page']);
                                } else {
                                    $total += 0;
                                }

                                $synopsis_printing_price = $synopsis_printing_price + $total;

                                @endphp
                                <tr>
                                    <td>{{ $synopsis_order->synopsis_binding_paper_type }}</td>
                                    <td>{{ $synopsis_order->synopsis_binding_paper_color }}</td>
                                    <td>{{ $synopsis_order->synopsis_binding_qty }}</td>
                                    <td>Black & White: {{$rate['bw']['first_page']}}, Color: {{$rate['color']['first_page']}}</td>
                                    <td>Black & White: {{$rate['bw']['other_page']}}, Color: {{$rate['color']['other_page']}}</td>
                                    <td class="text-right">₹ {{$total}} INR</td>
                                </tr>
                                @endforeach
                                @php
                                    $synopsis_binding_price = $synopsis_binding_qty * 30;
                                @endphp
                            </tbody>
                        </table>
                        <div class="sub_total">
                            <h4>Sub Total</h4>
                            <h5>₹ {{$synopsis_printing_price}} INR</h5>
                        </div>
                        <div class="printing__Details table-responsive">
                            <p>Binding Details <a href="#"
                                data-toggle="tooltip" title="Hooray!">
                                <i class=" fa-solid fa-circle-info"
                                    aria-hidden="true"></i>
                            </a></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Description</th>
                                        <th scope="col">Copies</th>
                                        <th scope="col" class="text-right">Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Synopsis Bind</td>
                                        <td>{{$synopsis_binding_qty}}</td>
                                        <td class="text-right">₹ {{$synopsis_binding_price}} INR</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div id="data"></div>
        </div>

        <div class="main-card mb-3 card d-none">
            <div class="card-body">
                <h5 class="card-title">User Timeline</h5>
                <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                            <span class="vertical-timeline-element-icon bounce-in">
                                <i class="badge badge-dot badge-dot-xl badge-success"></i>
                            </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title">Meeting with client</h4>
                                <p>
                                    Meeting with USA Client, today at
                                    <a href="javascript:void(0);" data-abc="true">12:00 PM</a>
                                </p>
                                <span class="vertical-timeline-element-date">9:30 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                            <span class="vertical-timeline-element-icon bounce-in">
                                <i class="badge badge-dot badge-dot-xl badge-warning">
                                </i>
                            </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <p>
                                    Another meeting with UK client today, at
                                    <b class="text-danger">3:00 PM</b>
                                </p>
                                <p>
                                    Yet another one, at
                                    <span class="text-success">5:00 PM</span>
                                </p>
                                <span class="vertical-timeline-element-date">12:25 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                            <span class="vertical-timeline-element-icon bounce-in">
                                <i class="badge badge-dot badge-dot-xl badge-danger">
                                </i>
                            </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title">
                                    Discussion with team about new product launch
                                </h4>
                                <p>
                                    meeting with team mates about the launch of new
                                    product. and tell them about new features
                                </p>
                                <span class="vertical-timeline-element-date">6:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                            <span class="vertical-timeline-element-icon bounce-in">
                                <i class="badge badge-dot badge-dot-xl badge-primary">
                                </i>
                            </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title text-success">
                                    Discussion with marketing team
                                </h4>
                                <p>
                                    Discussion with marketing team about the popularity
                                    of last product
                                </p>
                                <span class="vertical-timeline-element-date">9:00 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                            <span class="vertical-timeline-element-icon bounce-in">
                                <i class="badge badge-dot badge-dot-xl badge-success">
                                </i>
                            </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title">
                                    Purchase new hosting plan
                                </h4>
                                <p>
                                    Purchase new hosting plan as discussed with
                                    development team, today at
                                    <a href="javascript:void(0);" data-abc="true">10:00 AM</a>
                                </p>
                                <span class="vertical-timeline-element-date">10:30 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                            <span class="vertical-timeline-element-icon bounce-in">
                                <i class="badge badge-dot badge-dot-xl badge-warning">
                                </i>
                            </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <p>
                                    Another conference call today, at
                                    <b class="text-danger">11:00 AM</b>
                                </p>
                                <p>
                                    Yet another one, at
                                    <span class="text-success">1:00 PM</span>
                                </p>
                                <span class="vertical-timeline-element-date">12:25 PM</span>
                            </div>
                        </div>
                    </div>

                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                            <span class="vertical-timeline-element-icon bounce-in">
                                <i class="badge badge-dot badge-dot-xl badge-warning">
                                </i>
                            </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <p>
                                    Another meeting with UK client today, at
                                    <b class="text-danger">3:00 PM</b>
                                </p>
                                <p>
                                    Yet another one, at
                                    <span class="text-success">5:00 PM</span>
                                </p>
                                <span class="vertical-timeline-element-date">12:25 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                            <span class="vertical-timeline-element-icon bounce-in">
                                <i class="badge badge-dot badge-dot-xl badge-danger">
                                </i>
                            </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title">
                                    Discussion with team about new product launch
                                </h4>
                                <p>
                                    meeting with team mates about the launch of new
                                    product. and tell them about new features
                                </p>
                                <span class="vertical-timeline-element-date">6:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                            <span class="vertical-timeline-element-icon bounce-in">
                                <i class="badge badge-dot badge-dot-xl badge-primary">
                                </i>
                            </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title text-success">
                                    Discussion with marketing team
                                </h4>
                                <p>
                                    Discussion with marketing team about the popularity
                                    of last product
                                </p>
                                <span class="vertical-timeline-element-date">9:00 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                            <span class="vertical-timeline-element-icon bounce-in">
                                <i class="badge badge-dot badge-dot-xl badge-success">
                                </i>
                            </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title">
                                    Purchase new hosting plan
                                </h4>
                                <p>
                                    Purchase new hosting plan as discussed with
                                    development team, today at
                                    <a href="javascript:void(0);" data-abc="true">10:00 AM</a>
                                </p>
                                <span class="vertical-timeline-element-date">10:30 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                            <span class="vertical-timeline-element-icon bounce-in">
                                <i class="badge badge-dot badge-dot-xl badge-warning">
                                </i>
                            </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <p>
                                    Another conference call today, at
                                    <b class="text-danger">11:00 AM</b>
                                </p>
                                <p>
                                    Yet another one, at
                                    <span class="text-success">1:00 PM</span>
                                </p>
                                <span class="vertical-timeline-element-date">12:25 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="offcanvas-body" id="offcanvas-content">
    </div>
</aside>


<aside class="offcanvas offcanvas-right" id="my_offcanvas3">
      <header class="p-4">
        <button class="btn btn-close">&times Close</button>
      </header>

      <div class="chat-area">
        <!-- chatbox -->
        <div class="chatbox">
          <div class="modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-body">
                <div class="msg-body">
                  <ul>
                    <li class="sender">
                      <p>Hey, Are you there?</p>
                      <span class="time">10:06 am</span>
                    </li>
                    <li class="sender">
                      <p>Hey, Are you there?</p>
                      <span class="time">10:16 am</span>
                    </li>
                    <li class="repaly">
                      <p>yes!</p>
                      <span class="time">10:20 am</span>
                    </li>
                    <li class="sender">
                      <p>Hey, Are you there?</p>
                      <span class="time">10:26 am</span>
                    </li>
                    <li class="sender">
                      <p>Hey, Are you there?</p>
                      <span class="time">10:32 am</span>
                    </li>
                    <li class="repaly">
                      <p>How are you?</p>
                      <span class="time">10:35 am</span>
                    </li>
                    <li>
                      <div class="divider">
                        <h6>Today</h6>
                      </div>
                    </li>

                    <li class="repaly">
                      <p>yes, tell me</p>
                      <span class="time">10:36 am</span>
                    </li>
                    <li class="repaly">
                      <p>yes... on it</p>
                      <span class="time">junt now</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="send-box">
                <form action="">
                  <input
                    type="text"
                    class="form-control"
                    aria-label="message…"
                    placeholder="Write message…"
                  />

                  <button type="button">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i> Send
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</aside>
@endforeach

<div class="main__body__wrapp">
    <div class="main__banner header__inner__banner" style="height: 100px;">
        <div class="image__box__banner">
            <img src="images/innerbanner.jpg" alt="" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="banner__content__inner text-center">
                    <h1 class="text-dark">My Account</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item text-dark"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">
                                My Account
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="inner__about">
        <div class="container">
            <div class="account__wrapp">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 mb-3">
                        <div class="account__holder">
                            <div class="account__img">
                                <img src="{{$avatar}}" alt="" />
                            </div>
                            <div class="account__text">
                                <h4>{{Auth::user()->name}}</h4>
                                <span>{{Auth::user()->email}}</span>
                            </div>
                        </div>
                        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Order History</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" id="ticket-tab" data-toggle="tab" href="#ticket" role="tab" aria-controls="ticket" aria-selected="false">Ticket Issues</a>
                            </li> --}}
                        </ul>
                        <div class="button__account">
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <a href="javascript:;" onclick="parentNode.submit();">Log Out
                                    <span><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                                </a>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="search__holder__account">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="personal__text">
                                                Name
                                                {{-- <span><i class="fa-solid fa-pen-to-square"></i></span> --}}
                                            </h3>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-5">
                                            <div class="account__form">
                                                <input type="text" name="name" id="" value="{{Auth::user()->name}}" readonly disabled />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="search__holder__account">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="personal__text">
                                                Email Address
                                                {{-- <span><i class="fa-solid fa-pen-to-square"></i></span> --}}
                                            </h3>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="account__form">
                                                <input type="text" name="email" id="" value="{{Auth::user()->email}}" readonly disabled />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search__holder__account">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="personal__text">
                                                Mobile Number
                                                {{-- <span><i class="fa-solid fa-pen-to-square"></i></span> --}}
                                            </h3>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="account__form">
                                                <input type="text" name="phone" id="" value="{{Auth::user()->phone}}" readonly disabled />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h2>Orders</h2>
                                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Price</th>
                                            <th></th>
                                            <th>Payment Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>{{$order->order_id}}</td>
                                            <td>{{$order->total_amount}} INR</td>
                                            <td></td>
                                            <td>{{$order->payment_status}}</td>
                                            <td>
                                                <!-- <button data-trigger="#my_offcanvas2" class="btn" type="button" data-toggle="tooltip" data-placement="top" title="Details"> <i class="fa-solid fa-chevron-right"></i> </button> -->
                                                <button 
                                                    class="btn details-button" 
                                                    type="button" 
                                                    data-toggle="tooltip" 
                                                    data-placement="top" 
                                                    title="Details" 
                                                    data-trigger="#my_offcanvas2"
                                                    data-order-id="{{ $order->order_id }}"
                                                    data-info1="{{ $order->thesis_main ?? '' }}" 
                                                    data-stat1="{{ $order->tmain_stat ?? '' }}"
                                                    data-info2="{{ $order->thesis_hard_cover ?? '' }}" 
                                                    data-stat2="{{ $order->thard_stat ?? '' }}"
                                                    data-info3="{{ $order->thesis_soft_cover ?? '' }}" 
                                                    data-stat3="{{ $order->tsoft_stat ?? '' }}"
                                                    data-info4="{{ $order->synopsis_main ?? '' }}" 
                                                    data-stat4="{{ $order->smain_stat ?? '' }}"
                                                    data-info5="{{ $order->synopsis_cover ?? '' }}"
                                                    data-stat5="{{ $order->scover_stat ?? '' }}"
                                                    >
                                                    <i class="fa-solid fa-chevron-right"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Price</th>
                                            <th>Order Date</th>
                                            <th>Payment Status</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="ticket" role="tabpanel" aria-labelledby="ticket-tab">
                                <div class="button__all__ticket mb-5">
                                    <button
                                        class="btn btn-primary"
                                        data-toggle="modal"
                                        data-target="#exampleModal"
                                    >
                                        Ticket
                                    </button>
                                </div>
                                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                        <th>Ticket</th>
                                        <th>Date</th>
                                        <th>Subject</th>
                                        <th>priority</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>TKT1661</td>
                                        <td>early leave</td>
                                        <td>Early Leave</td>
                                        <td>Jan 2, 2024</td>
                                        <td>Sarita Tressy Nair</td>
                                        <td>
                                            <button
                                            data-trigger="#my_offcanvas3"
                                            class="btn btn-primary"
                                            type="button"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="Details"
                                            >
                                            <i class="fa-solid fa-chevron-right"></i>
                                            </button>
                                        </td>
                                        </tr>

                                        <tr>
                                        <td>TKT1661</td>
                                        <td>early leave</td>
                                        <td>Early Leave</td>
                                        <td>Jan 2, 2024</td>
                                        <td>Sarita Tressy Nair</td>
                                        <td>$372,000</td>
                                        </tr>
                                        <tr>
                                        <td>TKT1661</td>
                                        <td>early leave</td>
                                        <td>Early Leave</td>
                                        <td>Jan 2, 2024</td>
                                        <td>Sarita Tressy Nair</td>
                                        <td>$372,000</td>
                                        </tr>

                                        <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011-06-27</td>
                                        <td>$183,000</td>
                                        </tr>
                                        <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011-01-25</td>
                                        <td>$112,000</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-8 -->
                </div>
            </div>
        </div>
    </section>
</div>

<diV class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ticket Request</h5>
        <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
        >
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <div class="card__holder">
            <div class="row">
            <div class="mb-3 col-sm-12">
                <label for="exampleFormControlInput1" class="form-label"
                >Ticket Name
                </label>
                <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="name@example.com"
                />
            </div>

            <div class="mb-3 col-sm-12">
                <label for="exampleFormControlTextarea1" class="form-label"
                >Example textarea</label
                >
                <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
                ></textarea>
            </div>
            <button
                type="submit"
                class="btn btn-primary col-sm-6 ml-4 mt-4"
            >
                Submit
            </button>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
   
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    var laravelBaseUrl = "{{ url('/') }}";
    document.querySelectorAll('.details-button').forEach(function (button) {
    button.addEventListener('click', function () {
        var orderId = this.getAttribute('data-order-id');
        var info1 = this.getAttribute('data-info1');
        var s1 = this.getAttribute('data-stat1');
        var info2 = this.getAttribute('data-info2');
        var s2 = this.getAttribute('data-stat2');
        var info3 = this.getAttribute('data-info3');
        var s3 = this.getAttribute('data-stat3');
        var info4 = this.getAttribute('data-info4');
        var s4 = this.getAttribute('data-stat4');
        var info5 = this.getAttribute('data-info5');
        var s5 = this.getAttribute('data-stat5');

        var container = document.getElementById('data');
        container.innerHTML = ''; // Clear previous content

        var infos = [info1, info2, info3, info4, info5].filter(info => info !== "");

        infos.forEach((info, index) => {
            var additionalText = '';

            if (info === info1) {
                additionalText = "Thesis Main File";

                // Check if s1 is equal to 1, then don't show the buttons
                if (s1 === '1') {
                    return; // Skip to the next iteration of the loop
                }
            } else if (info === info2) {
                additionalText = "Thesis Hard Cover Design";
                if (s2 === '1') {
                    return;
                }
            } else if (info === info3) {
                additionalText = "Thesis Soft Cover Design";
                if (s3 === '1') {
                    return;
                }
            } else if (info === info4) {
                additionalText = "Synopsis Main File";
                if (s4 === '1') {
                    return;
                }
            } else if (info === info5) {
                additionalText = "Synopsis Design";
                if (s5 === '1') {
                    return;
                }
            }

            var title = additionalText;
            var div = createDivStructure(info, index, orderId, title);
            container.appendChild(div);
        });

        var offcanvas = new bootstrap.Offcanvas(document.getElementById('data'));
        offcanvas.show();
    });
});




function createDivStructure(info, index, orderId, tit) {
    var basePath = laravelBaseUrl + '/storage/';
    var fileUrl = info ? basePath + info : '';
    var content;
    var uniqueId = 'form-' + index;
    var approveButtonId = 'approveButton-' + index; // Unique ID for each approve button
    var rejectButtonId = 'rejectButton-' + index; // Unique ID for each reject button

    if (info) {
        var fileExtension = info.split('.').pop().toLowerCase();
        if (fileExtension === 'pdf') {
            content = `<iframe src="${fileUrl}" style="width:150px; height:150px;" frameborder="0"></iframe>`;
        } else {
            content = `<img src="${fileUrl}" style="width:150px; height:150px;" alt="Preview" />`;
        }
    } else {
        content = '';
    }

    var div = document.createElement('div');
    div.className = 'approve__wrapp p-4';
    div.innerHTML = `
        <div class="preview__holder">
            <div class="ulaa">
                <div id="pdfPreview-${index}">
                    ${content}
                </div>
                <div class="button_wrapp">
                    <button type="button" class="btn btn-secondary preview-button" data-file-url="${fileUrl}">Preview</button>
                    <a href="${fileUrl}" download="filename" class="btn btn-primary">Download</a>
                </div>
            </div>
            <div class="app__text">
                <h3>${tit}</h3>
                <button type="button" class="btn btn-success" id="${approveButtonId}">Approve</button>
                <button type="button" class="btn btn-danger" id="${rejectButtonId}">Reject</button>
                <form id="${uniqueId}" style="display:none;" data-order-id="${orderId}">
                    <textarea name="comment" placeholder="Enter your comment here"></textarea>
                    <button class="text-light mb-5" type="submit">Submit</button>
                </form>
            </div>
        </div>`;

    // Event listener for the reject button
    div.querySelector(`#${rejectButtonId}`).addEventListener('click', function () {
        var form = div.querySelector(`#${uniqueId}`);
        form.style.display = form.style.display === 'none' ? 'block' : 'none';
    });

    // Event listener for the approve button
    div.querySelector(`#${approveButtonId}`).addEventListener('click', function () {
        fetch('{{ route("approval") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': $('input[name="_token"]').val() // CSRF token
            },
            body: JSON.stringify({
                orderId: orderId,
                title: tit,
                fileUrl: fileUrl
            })
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                alert('Document Accepted');
                // Hide both Approve and Reject buttons upon successful approval
                document.getElementById(approveButtonId).style.display = 'none';
                document.getElementById(rejectButtonId).style.display = 'none';
            })
            .catch(error => {
                console.error('Sorry! Something went wrong, Please try again.');
            });
    });

    // Event listener for the preview button
    div.querySelector('.preview-button').addEventListener('click', function () {
        window.open(fileUrl, '_blank');
    });

    // Existing form submission event
    var form = div.querySelector(`#${uniqueId}`);
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        var comment = form.querySelector('textarea[name="comment"]').value;

        // AJAX call for form submission
        fetch('{{ route("submit-comment") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': $('input[name="_token"]').val() // CSRF token
            },
            body: JSON.stringify({
                orderId: orderId,
                title: tit,
                fileUrl: fileUrl,
                comment: comment
            })
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Feedback submission successful', data);
                // Optionally, also hide the buttons upon successful comment submission
                document.getElementById(approveButtonId).style.display = 'none';
                document.getElementById(rejectButtonId).style.display = 'none';
            })
            .catch(error => {
                console.error('Sorry! Something went wrong, Please try again.');
            });
    });

    return div;
}

    var pdfUrl = "https://d2xe8shibzpjog.cloudfront.net/Notice/makaut1/2905_1702468867.pdf";
    if (pdfUrl) {
        var pdfPreviewContainer = document.getElementById('pdfPreview');

        // Create an iframe to display the PDF
        var iframe = document.createElement('iframe');
        iframe.src = pdfUrl + "#toolbar=0"; // Append "#toolbar=0" to the URL to remove the toolbar
        iframe.style.width = '600px'; // Set a larger width to load the PDF properly
        iframe.style.height = '600px'; // Set a larger height to load the PDF properly
        iframe.style.overflow = 'hidden'; // Hide the overflow
        iframe.scrolling = 'no'; // Disable scrolling

        // Clear previous content and append the iframe
        pdfPreviewContainer.innerHTML = '';
        pdfPreviewContainer.appendChild(iframe);
    } else {
        alert("Please enter a URL.");
    }
</script>
<script>
    $(document).ready(function(){
        $('textarea[name="message"]').change(function(){
            var message = encodeURIComponent($(this).val()); // Encode the message to be URL-safe
            var whatsappUrl = "https://api.whatsapp.com/send?phone=+918013767079&text=" + message;
            $('#btn-submit').attr('href', whatsappUrl);
        });
    });
</script>
 <script>
      $(document).ready(function(){
    $("#formButton").click(function(){
        $("#form1").toggle();
    });
});
    </script>
@stop