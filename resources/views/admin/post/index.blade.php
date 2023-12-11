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
                <div class="breadcrumb-title pe-3">Posts</div>
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
                                            <th scope="col">Thumbnail</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Publish Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td><img src="{{Storage::url($post->thumbnail)}}" style="height: 100px; width: 180px;" /></td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->status}}</td>
                                            <td>{{$post->publish_at}}</td>
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