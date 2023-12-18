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
                <div class="breadcrumb-title pe-3">Testimonials</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row row-cols-1 row-cols-1">
                <div class="col">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary"></i></div>
                                <h5 class="mb-0 text-primary">New Testimonial</h5>
                            </div>
                            <hr>
                            <form class="row g-3" method="post" action="{{route('testimonials.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-3">
                                    <label for="introducer_id" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-md-3">
                                    <label for="introducer_id" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="col-md-3">
                                    <label for="introducer_id" class="form-label">Location</label>
                                    <input type="text" class="form-control" name="location">
                                </div>
                                <div class="col-md-3">
                                    <label for="introducer_id" class="form-label">Rating</label>
                                    <select class="form-control" name="rating">
                                        <option value="">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="introducer_id" class="form-label">Feedback</label>
                                    <textarea class="form-control" name="feedback"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary px-5">Save</button>
                                </div>
                            </form>
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