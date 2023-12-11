@extends('layouts.web')

@section('content')
<div class="main__body__wrapp">
    <div class="main__banner header__inner__banner">
        <div class="image__box__banner">
            <img src="./web/images/innerbanner.jpg" alt="" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="banner__content__inner text-center">
                    <h1>About Us</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Data
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
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="about__im">
                        <img src="./web/images/about.jpg" alt="" class="w-100" />
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="whowe__wrapp">
                        <h2>Who We Are</h2>
                        <img src="./web/images/line1.jpg" alt="" class="line_two" />
                        <p>
                            We, Dhar Brothers, had a humble start back in the 1930s and
                            today we take pride in saying that we have reached the
                            pinnacle of thesis/dissertation composing, printing and
                            binding. Our works have been submitted to all major
                            universities around the globe. We have a happy customer base
                            of over a thousand to our credit. We have an experience of
                            more than 85 years in the thesis/dissertation printing and
                            binding.
                        </p>
                        <p>
                            We compete with the best in the world in terms of thesis
                            printing and binding and our work has often been appreciated
                            for being leagues ahead of our global competitors. We are
                            currently trying to redefine the age-old practice of binding
                            by skillfully balancing modern technology and human touch. The
                            blend of the traditional and the new is what makes us who we
                            are today. Our employees undergo a rigorous training before
                            they are chosen for the job. Then, they bring to you the
                            highest level of craftsmanship. Our raw materials are all
                            sourced internationally to provide a gamut of the best of the
                            best. Our presence in this industry is for four generations
                            and we have witnessed changes in terms of business dynamics,
                            social and political turmoil, the boom of technology and
                            varying stakeholders' demand but the only thing we kept
                            unchanged is the commitment to deliver the best.
                        </p>

                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-5">
                                <div class="box__icon mt-0">
                                    <div class="icon">
                                        <img src="./web/images/icon_1.png" alt="" class="d-block icon__con" />
                                    </div>
                                    <h4>94 Years of Experience</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-5">
                                <div class="box__icon mt-0">
                                    <div class="icon">
                                        <img src="./web/images/icon_1.png" alt="" class="d-block icon__con" />
                                    </div>
                                    <h4>94 Years of Experience</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-5">
                                <div class="box__icon mt-0">
                                    <div class="icon">
                                        <img src="./web/images/icon_1.png" alt="" class="d-block icon__con" />
                                    </div>
                                    <h4>94 Years of Experience</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-5">
                                <div class="box__icon mt-0">
                                    <div class="icon">
                                        <img src="./web/images/icon_1.png" alt="" class="d-block icon__con" />
                                    </div>
                                    <h4>94 Years of Experience</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trustscene__wrapp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Trust Scene 1930</h2>
                    <img src="./web/images/line1.jpg" alt="" class="d-block lineone" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="old__man">
                        <img src="./web/images/img_3.jpg" alt="" class="w-100" />
                        <h4>First Generation Of Dhar Brothers - 1930 Kolkata, India</h4>
                        <p>
                            Back in 1930, Late Rashmohan Dhar started the journey with a
                            golden dream of being the pioneer in book binding, and thus
                            Dhar Brothers was founded in the British ruled Kolkata, India.
                        </p>
                        <p>
                            On that time the company was in book sewing, book binding,
                            panjika (Hindu astronomical almanac) binding and restoration
                            of old books. It was a simple and honest start to what would
                            re-define printing and binding in India in the years to come.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="old__man">
                        <img src="./web/images/img_3.jpg" alt="" class="w-100" />
                        <h4>First Generation Of Dhar Brothers - 1930 Kolkata, India</h4>
                        <p>
                            Back in 1930, Late Rashmohan Dhar started the journey with a
                            golden dream of being the pioneer in book binding, and thus
                            Dhar Brothers was founded in the British ruled Kolkata, India.
                        </p>
                        <p>
                            On that time the company was in book sewing, book binding,
                            panjika (Hindu astronomical almanac) binding and restoration
                            of old books. It was a simple and honest start to what would
                            re-define printing and binding in India in the years to come.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="old__man">
                        <img src="./web/images/img_3.jpg" alt="" class="w-100" />
                        <h4>First Generation Of Dhar Brothers - 1930 Kolkata, India</h4>
                        <p>
                            Back in 1930, Late Rashmohan Dhar started the journey with a
                            golden dream of being the pioneer in book binding, and thus
                            Dhar Brothers was founded in the British ruled Kolkata, India.
                        </p>
                        <p>
                            On that time the company was in book sewing, book binding,
                            panjika (Hindu astronomical almanac) binding and restoration
                            of old books. It was a simple and honest start to what would
                            re-define printing and binding in India in the years to come.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="old__man">
                        <img src="./web/images/img_3.jpg" alt="" class="w-100" />
                        <h4>First Generation Of Dhar Brothers - 1930 Kolkata, India</h4>
                        <p>
                            Back in 1930, Late Rashmohan Dhar started the journey with a
                            golden dream of being the pioneer in book binding, and thus
                            Dhar Brothers was founded in the British ruled Kolkata, India.
                        </p>
                        <p>
                            On that time the company was in book sewing, book binding,
                            panjika (Hindu astronomical almanac) binding and restoration
                            of old books. It was a simple and honest start to what would
                            re-define printing and binding in India in the years to come.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our__mission">
        <div class="container">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 ml-auto">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="mission__holder">
                            <h3>Our Mission</h3>
                            <img src="./web/images/line1.jpg" alt="" class="d-block lineone" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                commodo viverra maecenas accumsan.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                commodo viverra maecenas accumsan.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="mission__holder">
                            <h3>Our Vision</h3>
                            <img src="./web/images/line1.jpg" alt="" class="d-block lineone" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                commodo viverra maecenas accumsan.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                commodo viverra maecenas accumsan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial__wrapp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="mt-5">Customer Saying</h2>
                    <img src="./web/images/line1.jpg" alt="" class="d-block lineone" />
                </div>
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 25, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "450" :{ "items" : "1" } , "767" :{ "items" : "2" } , "1000":{ "items" : "3" }}}'>
                    <div class="slide-item">
                        <div class="testi__wrapp">
                            <div class="star__wrapp">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="clearfix"></div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspen ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel
                            </p>
                            <img src="./web/images/tes_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="testi__wrapp">
                            <div class="star__wrapp">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="clearfix"></div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspen ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel
                            </p>
                            <img src="./web/images/tes_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="testi__wrapp">
                            <div class="star__wrapp">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="clearfix"></div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspen ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel
                            </p>
                            <img src="./web/images/tes_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="testi__wrapp">
                            <div class="star__wrapp">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="clearfix"></div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspen ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel
                            </p>
                            <img src="./web/images/tes_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="testi__wrapp">
                            <div class="star__wrapp">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="clearfix"></div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspen ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel
                            </p>
                            <img src="./web/images/tes_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="testi__wrapp">
                            <div class="star__wrapp">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="clearfix"></div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspen ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel
                            </p>
                            <img src="./web/images/tes_1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop