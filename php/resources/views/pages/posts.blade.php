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
                    <h1>Blog</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Blog
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
                @foreach($posts as $post)
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="blog__box">
                        <img src="./web/images/blog.jpg" alt="">
                        <div class="blog__boxtext">
                            <span>{{ date('d-m-Y', strtotime($post->created_at))}}</span>
                            <a href="{{ route('web.post', $post->slug) }}">{{$post->title}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@stop