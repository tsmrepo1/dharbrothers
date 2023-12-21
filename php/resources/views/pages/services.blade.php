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
                    <h1>What We do</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                What We do
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
                @foreach($services as $service)
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="what__box">
                        <img src="{{url('web/images/1.jpg')}}" alt="" />
                        <h2>{{ $service->title }}</h2>
                        <?php $string = substr($service->content, 0, 258) ?>
                        {!! $string !!}
                        <a href=" {{ route('web.service', $service->slug) }}" class="button__readmore"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@stop