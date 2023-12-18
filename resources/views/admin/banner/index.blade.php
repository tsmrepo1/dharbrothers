<x-app-layout>
    @php
    $permission = session('permission');
    @endphp
    .
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
                <div class="breadcrumb-title pe-3">Services</div>
            </div>
            <!--end breadcrumb-->
            <div class="row row-cols-1 row-cols-1">
                <div class="col">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="export-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL No.</th>
                                            <th scope="col">First Title</th>
                                            <th scope="col">Second Title</th>
                                            <th scope="col">Third Title</th>
                                            <th scope="col">Banner Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($banners as $banner)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $banner->title1  }}</td>
                                            <td>{{ $banner->title2  }}</td>
                                            <td>{{ $banner->title3  }}</td>
                                            <td><img src="{{Storage::url($banner->image)}}" style="height: 100px; width: 200px;" /></td>
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
    <!--end page wrapper -->
    @include('inc.footer')
</x-app-layout>