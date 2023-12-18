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
                <div class="breadcrumb-title pe-3">FAQ Categories</div>
            </div>
            <!--end breadcrumb-->
            <div class="row row-cols-1 row-cols-1">
                <div class="col-md-6">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <form action="{{ route('faqcategories.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <h5>Categories</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="export-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL No.</th>
                                            <th scope="col">Category</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$category->name}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end page wrapper -->
            @include('inc.footer')
</x-app-layout>