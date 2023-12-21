@extends('layouts.web')

@section('content')
<div class="main__body__wrapp">
    <div class="main__banner header__inner__banner">
        <div class="image__box__banner">
            <img src="images/innerbanner.jpg" alt="" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="banner__content__inner text-center">
                    <h1>Log In</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Log In
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="inner__about mt-5">
        <div class="container">
            <div class="col-sm-11 m-auto">
                <div class="login__wrapp">

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="login__im"></div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="login__form">
                                <h2>Member Sign In</h2>
                                <p>Don't have an account? <a href="#">Create your free account</a></p>

                                <form action="<?php echo base_url()?>/signin">
                                    <div class="form-group name__holder">
                                        <input type="text" placeholder="Email" name="email">
                                    </div>
                                    <div class="form-group name__holder">
                                        <input type="Password" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group name__holder">
                                        <input type="submit" value="submit" class="ml-0 mr-0">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop