@extends('layouts.web')

@section('content')
<div class="main__body__wrapp">
    <div class="main__banner header__inner__banner">
        <div class="image__box__banner">
            <img src="images/innerbanner.jpg" alt="" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="banner__content__inner text-center">
                    <h1>Order Thesis Online</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Order Thesis Online
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="inner__about mt-5">
        <form action="{{route('web.place_order')}}" method="POST">
        @csrf
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="document__detailsone mb-4">

                            <h2>Check Out</h2>
                            <div class="binding__details">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6 class="colo__holder">Contact</h6>
                                    </div>

                                    <div class="col-sm-12 mb-3">
                                        <div class="searche__wrapp">
                                            <p>Email Address</p>
                                            <input type="text" name="email" required id="" value="braktim99@gmail.com" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-5">
                                        <div class="searche__wrapp">
                                            <p>Phone Number</p>
                                            <input type="text" name="phone" required id="" value="9836739907" />
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6 class="colo__holder">Billing Adress</h6>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="searche__wrapp">
                                            <p>First Name</p>
                                            <input type="text" name="first_name" id="" required value="Raktim" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="searche__wrapp">
                                            <p>Last Name</p>
                                            <input type="text" name="last_name" id="" required value="Banerjee" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <div class="searche__wrapp">
                                            <p>University Name </p>
                                            <input type="text" name="university_name" id="" required value="MAKAUT" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <div class="searche__wrapp">
                                            <p>Company</p>
                                            <input type="text" name="company" id="" required value="TSM" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <div class="searche__wrapp">
                                            <p>Address</p>
                                            <input type="text" name="billing_street" id="" required value="Rammohan Mukherjee Lane" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <div class="searche__wrapp">
                                            <p>Apartment, suite,etc. ( optional )</p>
                                            <input type="text" name="billing_apartment" id="" required value="29E/1" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <div class="searche__wrapp">
                                            <p>Country</p>
                                            <input type="text" name="billing_country" id="" required value="India" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mb-5">
                                        <div class="searche__wrapp">
                                            <p>City</p>
                                            <input type="text" name="billing_city" id="" required value="Howrah" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mb-5">
                                        <div class="searche__wrapp">
                                            <p>State</p>
                                            <input type="text" name="billing_state" id="" required value="West Bengal" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mb-5">
                                        <div class="searche__wrapp">
                                            <p>PIN code</p>
                                            <input type="text" name="billing_pin" id="" required value="711102" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6 class="colo__holder">Shipping Adress</h6>
                                    </div>
                                    <div class="col-sm-12 mb-5">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="pickup" value="1" checked>I will Collect in Person
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="pickup" value="0">To be Sent to the Address
                                            </label>
                                        </div>

                                    </div>
                                    <div class="row" id="shipping_details" style="margin-left: 0px; display: none;">
                                        <div class="col-sm-12 mb-4">

                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" id="same_as_billing">Same As Billing Address
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 mb-3">
                                            <div class="searche__wrapp">
                                                <p>Address</p>
                                                <input type="text" name="shipping_street" id="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mb-3">
                                            <div class="searche__wrapp">
                                                <p>Apartment, suite,etc. ( optional )</p>
                                                <input type="text" name="shipping_apartment" id="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mb-3">
                                            <div class="searche__wrapp">
                                                <p>Country</p>
                                                <input type="text" name="shipping_country" id="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mb-3">
                                            <div class="searche__wrapp">
                                                <p>City</p>
                                                <input type="text" name="shipping_city" id="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mb-3">
                                            <div class="searche__wrapp">
                                                <p>State</p>
                                                <input type="text" name="shipping_state" id="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mb-3">
                                            <div class="searche__wrapp">
                                                <p>PIN code</p>
                                                <input type="text" name="shipping_pin" id="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ordersummary__wrapp">
                            <h3>Order Summary</h3>
                            <table class="table border-solid mt-4">
                                <tbody>
                                    @isset($hard_binding_total_price)
                                    <tr>
                                        <th>Hard Binding</th>
                                        <td class="text-right">₹ {{$hard_binding_total_price}}</td>
                                    </tr>
                                    @endisset

                                    @isset($soft_binding_total_price)
                                    <tr>
                                        <th>Soft Binding</th>
                                        <td class="text-right">₹ {{$soft_binding_total_price}}</td>
                                    </tr>
                                    @endisset

                                    @isset($synopsis_binding_total_price)
                                    <tr>
                                        <th>Synopsis Binding</th>
                                        <td class="text-right">₹ {{$synopsis_binding_total_price}}</td>
                                    </tr>
                                    @endisset

                                    @isset($cgst)
                                    <tr>
                                        <th>CGST</th>
                                        <td class="text-right">₹ {{$cgst}}</td>
                                    </tr>
                                    @endisset

                                    @isset($sgst)
                                    <tr>
                                        <th>SGST</th>
                                        <td class="text-right">₹ {{$sgst}}</td>
                                    </tr>
                                    @endisset

                                </tbody>
                            </table>

                            @isset($total)
                            <div class="total__holder">
                                <h3>Total</h3>
                                <h3 class="ml-auto">₹ {{$total}}</h3>
                            </div>
                            @endisset

                        </div>
                        <button class="proceed" type="submit">Place Order</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('input[name="pickup"]').change(function() {
            if ($('input[name="pickup"]:checked').val() === '1') {
                // Hide the shipping details if the radio button value is 1
                $('#shipping_details').hide();

                $('input[name="shipping_street"]').removeAttr('required');
                $('input[name="shipping_apartment"]').removeAttr('required');
                $('input[name="shipping_country"]').removeAttr('required');
                $('input[name="shipping_city"]').removeAttr('required');
                $('input[name="shipping_state"]').removeAttr('required');
                $('input[name="shipping_pin"]').removeAttr('required');

            } else if ($('input[name="pickup"]:checked').val() === '0') {
                // Show the shipping details if the radio button value is 0
                $('#shipping_details').show();

                $('input[name="shipping_street"]').attr('required', true);
                $('input[name="shipping_apartment"]').attr('required', true);
                $('input[name="shipping_country"]').attr('required', true);
                $('input[name="shipping_city"]').attr('required', true);
                $('input[name="shipping_state"]').attr('required', true);
                $('input[name="shipping_pin"]').attr('required', true);
            }
        });

        $('#same_as_billing').change(function() {
            if ($(this).is(':checked')) {
                // Copy value from billing_apartment to shipping_street and make shipping_street read-only
                var billing_street      = $('input[name="billing_street"]').val();
                var billing_apartment   = $('input[name="billing_apartment"]').val();
                var billing_country     = $('input[name="billing_country"]').val();
                var billing_city        = $('input[name="billing_city"]').val();
                var billing_state       = $('input[name="billing_state"]').val();
                var billing_pin         = $('input[name="billing_pin"]').val();


                $('input[name="shipping_street"]').val(billing_street).attr('readonly', true).attr('disabled', true);
                $('input[name="shipping_apartment"]').val(billing_apartment).attr('readonly', true).attr('disabled', true);
                $('input[name="shipping_country"]').val(billing_country).attr('readonly', true).attr('disabled', true);
                $('input[name="shipping_city"]').val(billing_city).attr('readonly', true).attr('disabled', true);
                $('input[name="shipping_state"]').val(billing_state).attr('readonly', true).attr('disabled', true);
                $('input[name="shipping_pin"]').val(billing_pin).attr('readonly', true).attr('disabled', true);

                $('input[name="billing_street"]').on("change", function() {
                    billing_street = $('input[name="billing_street"]').val()
                    $('input[name="shipping_street"]').val(billing_street)
                })

                $('input[name="billing_apartment"]').on("change", function() {
                    billing_apartment = $('input[name="billing_apartment"]').val()
                    $('input[name="shipping_apartment"]').val(billing_apartment)
                })

                $('input[name="billing_country"]').on("change", function() {
                    billing_country = $('input[name="billing_country"]').val()
                    $('input[name="shipping_country"]').val(billing_country)
                })

                $('input[name="billing_city"]').on("change", function() {
                    billing_city = $('input[name="billing_city"]').val()
                    $('input[name="shipping_city"]').val(billing_city)
                })

                $('input[name="billing_state"]').on("change", function() {
                    billing_state = $('input[name="billing_state"]').val()
                    $('input[name="shipping_state"]').val(billing_state)
                })

                $('input[name="billing_pin"]').on("change", function() {
                    billing_pin = $('input[name="billing_pin"]').val()
                    $('input[name="shipping_pin"]').val(billing_pin)
                })

            } else {
                // Remove read-only attribute from shipping_street
                $('input[name="shipping_street"]').removeAttr('readonly').removeAttr('disabled');
                $('input[name="shipping_apartment"]').removeAttr('readonly').removeAttr('disabled');
                $('input[name="shipping_country"]').removeAttr('readonly').removeAttr('disabled');
                $('input[name="shipping_city"]').removeAttr('readonly').removeAttr('disabled');
                $('input[name="shipping_state"]').removeAttr('readonly').removeAttr('disabled');
                $('input[name="shipping_pin"]').removeAttr('readonly').removeAttr('disabled');

                $('input[name="billing_street"]').off("change")
                $('input[name="billing_apartment"]').off("change")
                $('input[name="billing_country"]').off("change")
                $('input[name="billing_city"]').off("change")
                $('input[name="billing_state"]').off("change")
                $('input[name="billing_pin"]').off("change")
            }
        });
    });
</script>
@stop