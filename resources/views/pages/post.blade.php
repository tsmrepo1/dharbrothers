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
                    <h1>{{ $post->title }}</h1>

                    <nav aria-label=" breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('web.services') }}">What We Do</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $post->title }}
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
                    <div class="binding__wrapp">
                        <img src="{{ Storage::url($post->thumbnail) }}" class="img-fluid" />
                        <h2 class="mt-5">{{ $post->title }}</h2>
                        {!! $post->content !!}
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