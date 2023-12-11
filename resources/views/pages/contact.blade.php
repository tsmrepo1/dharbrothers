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
                    <h1>Contact Us</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Contact us
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="inner__about mt-5 contact__before">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="form__contacthome p-0">
                        <h2 class="text-left">Get In Touch</h2>
                        <img src="./web/images/line1.jpg" alt="" class="d-block lineone ml-0 mr-0">

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
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 pr-0">
                    <div class="map__holder">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14736.221804284312!2d88.48880994999999!3d22.577029300000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1697625014143!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 pl-0">
                    <div class="contact__address border-bottom-0">
                        <div class="contact__icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <a href="#">prosperconstruction@gmail.com</a>

                    </div>
                    <div class="contact__address">
                        <div class="contact__icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <a href="#">+( 91 ) 983 006 6537</a>

                    </div>
                    <div class="contact__address">
                        <div class="contact__icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <p>70/1 Lorem ipsum dolor sit amet, consectetur adipiscing </p>

                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
@stop