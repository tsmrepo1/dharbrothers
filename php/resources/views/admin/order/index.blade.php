<x-app-layout>
    <!--sidebar wrapper -->
    @include('inc.sidebar')
    <!--end sidebar wrapper -->

    <!--start header -->
    @include('inc.header')
    <!--end header -->

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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>SL No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Order ID</th>
                                            <th>Order Amount</th>
                                            <th>Order Date</th>
                                            <th>Payment Status</th>
                                            <th>Transaction ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->user_name }}</td>
                                            <td>{{ $order->user_email }}</td>
                                            <td>{{ $order->user_phone }}</td>
                                            <td>{{ $order->order_id }}</td>
                                            <td>{{ $order->order_amount }} INR</td>
                                            <td>{{ date("d-m-Y", strtotime($order->created_at)) }}</td>
                                            <td>{{ $order->payment_status }}</td>
                                            <td>{{ $order->transaction_id }}</td>
                                            <td>
                                                <a href="{{ route('admin.single_order', $order->order_id) }}" class="btn btn-sm btn-info">View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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