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
                    <h1>FAQ</h1>

                    <nav aria-label=" breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('web.services') }}">FAQ</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="inner__about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 m-auto">
                    <div class="accordion" id="faq">
                        @php $i = 0; @endphp
                        @foreach($faqs as $faq) @php $i++; @endphp
                            <h4>{{ $faq->name }}</h4>
                            <img src="./images/faq.jpg" alt="" class="mb-3">
                            @foreach($faq->faqs as $text)
                            <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq_{{$i}}_{{$loop->iteration}}"
                                    aria-expanded="true" aria-controls="faq2">{{ $text->question }}</a>
                                </div>
        
                                <div id="faq_{{$i}}_{{$loop->iteration}}" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                         {{ $text->answer }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop