@extends('layouts.web')

@section('content')
<div class="main__body__wrapp">
    <div class="main__banner header__inner__banner">
        <div class="image__box__banner">
            <img src="{{url('web/images/innerbanner.jpg')}}" alt="" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="banner__content__inner text-center">
                    <h1>{{ $service->title }}</h1>

                    <nav aria-label=" breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('web.services') }}">What We Do</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $service->title }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="inner__about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <!-- Carousel -->
                    <div id="carousel" class="carousel slide gallery" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-slide-number="0" data-toggle="lightbox" data-gallery="gallery" data-remote="https://source.unsplash.com/vbNTwfO9we0/1600x900.jpg">
                                <img src="https://source.unsplash.com/vbNTwfO9we0/1600x900.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-slide-number="1" data-toggle="lightbox" data-gallery="gallery" data-remote="https://source.unsplash.com/DEhwkPYevhE/1600x900.jpg">
                                <img src="https://source.unsplash.com/DEhwkPYevhE/1600x900.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-slide-number="2" data-toggle="lightbox" data-gallery="gallery" data-remote="https://source.unsplash.com/-RV5PjUDq9U/1600x900.jpg">
                                <img src="https://source.unsplash.com/-RV5PjUDq9U/1600x900.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-slide-number="3" data-toggle="lightbox" data-gallery="gallery" data-remote="https://source.unsplash.com/sd0rPap7Uus/1600x900.jpg">
                                <img src="https://source.unsplash.com/sd0rPap7Uus/1600x900.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-slide-number="4" data-toggle="lightbox" data-gallery="gallery" data-remote="https://source.unsplash.com/kmRZFcZEMY8/1600x900.jpg">
                                <img src="https://source.unsplash.com/kmRZFcZEMY8/1600x900.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-slide-number="5" data-toggle="lightbox" data-gallery="gallery" data-remote="https://source.unsplash.com/HJDdrWtlkIY/1600x900.jpg">
                                <img src="https://source.unsplash.com/HJDdrWtlkIY/1600x900.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-slide-number="6" data-toggle="lightbox" data-gallery="gallery" data-remote="https://source.unsplash.com/VfuJpt81JZo/1600x900.jpg">
                                <img src="https://source.unsplash.com/VfuJpt81JZo/1600x900.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-slide-number="7" data-toggle="lightbox" data-gallery="gallery" data-remote="https://source.unsplash.com/NLkXZQ7kHzI/1600x900.jpg">
                                <img src="https://source.unsplash.com/NLkXZQ7kHzI/1600x900.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-slide-number="8" data-toggle="lightbox" data-gallery="gallery" data-remote="https://source.unsplash.com/bl4WNYGe2KE/1600x900.jpg">
                                <img src="https://source.unsplash.com/bl4WNYGe2KE/1600x900.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-slide-number="9" data-toggle="lightbox" data-gallery="gallery" data-remote="https://source.unsplash.com/_8zfgT9kS2g/1600x900.jpg">
                                <img src="https://source.unsplash.com/_8zfgT9kS2g/1600x900.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-slide-number="10" data-toggle="lightbox" data-gallery="gallery" data-remote="https://source.unsplash.com/enuCEimS1p4/1600x900.jpg">
                                <img src="https://source.unsplash.com/enuCEimS1p4/1600x900.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-slide-number="11" data-toggle="lightbox" data-gallery="gallery" data-remote="https://source.unsplash.com/hZDtZkdXtek/1600x900.jpg">
                                <img src="https://source.unsplash.com/hZDtZkdXtek/1600x900.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <a class="carousel-fullscreen" href="#carousel" role="button">
                            <span class="carousel-fullscreen-icon" aria-hidden="true"></span>
                            <span class="sr-only">Fullscreen</span>
                        </a>
                        <a class="carousel-pause pause" href="#carousel" role="button">
                            <span class="carousel-pause-icon" aria-hidden="true"></span>
                            <span class="sr-only">Pause</span>
                        </a>
                    </div>
                    <!-- Carousel Navigatiom -->
                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-slide-number="0">
                                <div class="row mx-0">
                                    <div id="carousel-selector-0" class="thumb col-3 px-1 py-2 selected" data-target="#carousel" data-slide-to="0">
                                        <img src="https://source.unsplash.com/vbNTwfO9we0/1600x900.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-1" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="1">
                                        <img src="https://source.unsplash.com/DEhwkPYevhE/1600x900.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-2" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="2">
                                        <img src="https://source.unsplash.com/-RV5PjUDq9U/1600x900.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-3" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="3">
                                        <img src="https://source.unsplash.com/sd0rPap7Uus/1600x900.jpg" class="img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item " data-slide-number="1">
                                <div class="row mx-0">
                                    <div id="carousel-selector-4" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="4">
                                        <img src="https://source.unsplash.com/kmRZFcZEMY8/1600x900.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-5" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="5">
                                        <img src="https://source.unsplash.com/HJDdrWtlkIY/1600x900.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-6" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="6">
                                        <img src="https://source.unsplash.com/VfuJpt81JZo/1600x900.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-7" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="7">
                                        <img src="https://source.unsplash.com/NLkXZQ7kHzI/1600x900.jpg" class="img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-slide-number="2">
                                <div class="row mx-0">
                                    <div id="carousel-selector-8" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="8">
                                        <img src="https://source.unsplash.com/bl4WNYGe2KE/1600x900.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-9" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="9">
                                        <img src="https://source.unsplash.com/_8zfgT9kS2g/1600x900.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-10" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="10">
                                        <img src="https://source.unsplash.com/enuCEimS1p4/1600x900.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-11" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="11">
                                        <img src="https://source.unsplash.com/hZDtZkdXtek/1600x900.jpg" class="img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="binding__wrapp">
                        <h2>{{ $service->title }}</h2>
                        {!! $service->content !!}
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="form__contacthome pl-3 pr-3 pt-5 pb-5 box-shdow__one">
                        <h2>Enquire Now</h2>
                        <img src="./images/line1.jpg" alt="" class="d-block lineone">

                        <form action="{{route('web.lead')}}" method="POST">
                            @csrf
                            <div class="form-group name__holder">
                                <input type="text" placeholder="Name" name="name" required>
                            </div>
                            <div class="form-group name__holder">
                                <input type="text" placeholder="Phone" name="phone" required>
                            </div>
                            <div class="form-group name__holder">
                                <input type="text" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group name__holder">
                                <textarea id="" cols="30" rows="10" placeholder="Massage" name="message" required></textarea>
                            </div>
                            <div class="form-group name__holder">
                                <input type="submit" value="submit" class="ml-0 mr-0">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop