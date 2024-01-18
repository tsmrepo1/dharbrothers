@extends('layouts.web')

@section('content')
    <div class="main__body__wrapp">
        <div class="thinkyou__wrapp">
        <div class="m-auto thank__holder">
            <img src="{{ asset('web/images/illustration-image.png') }}" class="m-auto d-block" alt="">
            <h2>Thank You!</h2>
            <p>Your order has been placed successfully</p>
            <table>
            <thead>
                <tr>
                    <th scope="col">Order Information</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Order ID:</td>
                    <td><strong>{{$order_id}}</strong></td>
                </tr>
                @if($payment_status == "Success")
                <tr>
                    <td>Payment Status:</td>
                    <td>{{$payment_status}}</td>
                </tr>
                <tr>
                    <td>Transaction ID:</td>
                    <td><strong>{{$transaction_id}}</strong></td>
                </tr>
                @else
                <tr>
                    <td>Payment Status:</td>
                    <td>{{$payment_status}}</td>
                </tr>
                <tr>
                    <td>Transaction ID:</td>
                    <td><strong>{{$transaction_id}}</strong></td>
                </tr>
                @endif
            </tbody>
            </table>
            <a href="{{route('user.myaccount')}}" class="home text-dark">Login</a>
        </div>
        </div>
    </div>
@stop