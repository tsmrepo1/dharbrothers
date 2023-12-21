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
                    <h1>Testimonial</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Testimonial
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
                <?php foreach ($testimonials as $testimonial) { ?>
                    <div class="col-md-4 mb-5">
                        <div class="slide-item">
                            <div class="testi__wrapp">
                                <div class="star__wrapp">
                                    <?php for ($i = 0; $i < $testimonial->rating; $i++) { ?>
                                        <i class="fa-solid fa-star"></i>
                                    <?php } ?>

                                    <?php for ($i = 5 - $testimonial->rating; $i > 0; $i--) { ?>
                                        <i class="fa-solid fa-star" style="color: #f0f0f0;"></i>
                                    <?php } ?>
                                </div>
                                <div class="clearfix"></div>
                                <p>{{$testimonial->feedback}}</p>
                                <img src="{{ Storage::url($testimonial->image) }}" alt="">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>
@stop