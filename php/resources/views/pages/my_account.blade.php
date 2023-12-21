@extends('layouts.web')

@section('content')

<!-- offcanvas panel right -->
<aside class="offcanvas offcanvas-right" id="my_offcanvas2">
    <header class="p-4">
        <button class="btn  btn-close"> &times Close </button>

    </header>
    <div class="printing__wrapp p-4 bg-white mt-5">
        <h3 class="mb-4">Hard Binding &amp; Printing</h3>
        <div class="printing__Details table-responsive">
            <p>Binding Details</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Copies</th>
                        <th scope="col" class="text-right">Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hard Bind</td>
                        <td>3</td>
                        <td class="text-right">₹ 900</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="printing__Details table-responsive">
            <p>Print Details</p>
            <span>1st Copy Charges</span>
            <span>Additional Copy Charges</span>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Copies</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Rate</th>

                        <th scope="col" class="text-right">Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Normal Print BW</td>
                        <td>1</td>
                        <td>50</td>
                        <td>10</td>
                        <td class="text-right">₹ 500</td>
                    </tr>
                    <tr>
                        <td>Normal Print Color</td>
                        <td>1</td>
                        <td>150</td>
                        <td>6</td>
                        <td class="text-right">₹ 900</td>
                    </tr>
                </tbody>
            </table>
            <div class="sub_total">
                <h4>Sub Total</h4>
                <h5>₹ 1900</h5>
            </div>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">User Timeline</h5>
            <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-success"></i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <h4 class="timeline-title">Meeting with client</h4>
                            <p>
                                Meeting with USA Client, today at
                                <a href="javascript:void(0);" data-abc="true">12:00 PM</a>
                            </p>
                            <span class="vertical-timeline-element-date">9:30 AM</span>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-warning">
                            </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <p>
                                Another meeting with UK client today, at
                                <b class="text-danger">3:00 PM</b>
                            </p>
                            <p>
                                Yet another one, at
                                <span class="text-success">5:00 PM</span>
                            </p>
                            <span class="vertical-timeline-element-date">12:25 PM</span>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-danger">
                            </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <h4 class="timeline-title">
                                Discussion with team about new product launch
                            </h4>
                            <p>
                                meeting with team mates about the launch of new
                                product. and tell them about new features
                            </p>
                            <span class="vertical-timeline-element-date">6:00 PM</span>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-primary">
                            </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <h4 class="timeline-title text-success">
                                Discussion with marketing team
                            </h4>
                            <p>
                                Discussion with marketing team about the popularity
                                of last product
                            </p>
                            <span class="vertical-timeline-element-date">9:00 AM</span>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-success">
                            </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <h4 class="timeline-title">
                                Purchase new hosting plan
                            </h4>
                            <p>
                                Purchase new hosting plan as discussed with
                                development team, today at
                                <a href="javascript:void(0);" data-abc="true">10:00 AM</a>
                            </p>
                            <span class="vertical-timeline-element-date">10:30 PM</span>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-warning">
                            </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <p>
                                Another conference call today, at
                                <b class="text-danger">11:00 AM</b>
                            </p>
                            <p>
                                Yet another one, at
                                <span class="text-success">1:00 PM</span>
                            </p>
                            <span class="vertical-timeline-element-date">12:25 PM</span>
                        </div>
                    </div>
                </div>

                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-warning">
                            </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <p>
                                Another meeting with UK client today, at
                                <b class="text-danger">3:00 PM</b>
                            </p>
                            <p>
                                Yet another one, at
                                <span class="text-success">5:00 PM</span>
                            </p>
                            <span class="vertical-timeline-element-date">12:25 PM</span>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-danger">
                            </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <h4 class="timeline-title">
                                Discussion with team about new product launch
                            </h4>
                            <p>
                                meeting with team mates about the launch of new
                                product. and tell them about new features
                            </p>
                            <span class="vertical-timeline-element-date">6:00 PM</span>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-primary">
                            </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <h4 class="timeline-title text-success">
                                Discussion with marketing team
                            </h4>
                            <p>
                                Discussion with marketing team about the popularity
                                of last product
                            </p>
                            <span class="vertical-timeline-element-date">9:00 AM</span>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-success">
                            </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <h4 class="timeline-title">
                                Purchase new hosting plan
                            </h4>
                            <p>
                                Purchase new hosting plan as discussed with
                                development team, today at
                                <a href="javascript:void(0);" data-abc="true">10:00 AM</a>
                            </p>
                            <span class="vertical-timeline-element-date">10:30 PM</span>
                        </div>
                    </div>
                </div>
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-warning">
                            </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <p>
                                Another conference call today, at
                                <b class="text-danger">11:00 AM</b>
                            </p>
                            <p>
                                Yet another one, at
                                <span class="text-success">1:00 PM</span>
                            </p>
                            <span class="vertical-timeline-element-date">12:25 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="one p-4 bg-white mt-5">
        <div class="chat__holder">
            <div class="d-flex">
                <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                <div class="p-1">
                    <div class="d-flex align-items-end">
                        <div class="sender-name"><a href="#">#Surya Prakash</a></div>
                        <div class="chat-time">09:54 24/05/21</div>
                    </div>

                    <div class="chat-text">
                        Hello guys! lets get into the party
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                <div class="p-1">
                    <div class="d-flex align-items-end">
                        <div class="sender-name"><a href="#">#Surya Prakash</a></div>
                        <div class="chat-time">09:54 24/05/21</div>
                    </div>

                    <div class="chat-text">
                        Hello guys! lets get into the party
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area no-padding blank">
            <div class="status-upload">
                <form>
                    <textarea placeholder="What are you doing right now?"></textarea>
                    <ul>
                        <li>
                            <a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-music"></i></a>
                        </li>
                        <li>
                            <a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a>
                        </li>
                        <li>
                            <a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sound Record"><i class="fa fa-microphone"></i></a>
                        </li>
                        <li>
                            <a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a>
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-success green">
                        <i class="fa fa-share"></i>Post
                    </button>
                </form>
            </div>
            <!-- Status Upload  -->
        </div>
    </div>






</aside>
<div class="main__body__wrapp">
    <div class="main__banner header__inner__banner">
        <div class="image__box__banner">
            <img src="images/innerbanner.jpg" alt="" />
        </div>
        <div class="banner__content">
            <div class="container">
                <div class="banner__content__inner text-center">
                    <h1>My Account</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-lg-inline-flex align-items-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                My Account
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="inner__about">
        <div class="container">
            <div class="account__wrapp">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 mb-3">
                        <div class="account__holder">
                            <div class="account__img">
                                <img src="./images/man.jpg" alt="" />
                            </div>
                            <div class="account__text">
                                <h3>Vishal Rajak</h3>
                                <span>vishalrajak20@gmail.com</span>
                            </div>
                        </div>
                        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Order History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Shipping Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false">Payment Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="ticket-tab" data-toggle="tab" href="#ticket" role="tab" aria-controls="ticket" aria-selected="false">Ticket Issues</a>
                            </li>
                        </ul>
                        <div class="button__account">
                            <a href="#">Log Out
                                <span><i class="fa-solid fa-arrow-right-from-bracket"></i></span></a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="search__holder__account">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="personal__text">
                                                Personal information
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                            </h3>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-5">
                                            <div class="account__form">
                                                <input type="text" name="" id="" placeholder="Vishal" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-5">
                                            <div class="account__form">
                                                <input type="text" name="" id="" placeholder="Rajak" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="search__holder__account">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="personal__text">
                                                Email Address
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                            </h3>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="account__form">
                                                <input type="text" name="" id="" placeholder="vishalrajak20@gmail.com" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search__holder__account">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="personal__text">
                                                Mobile Number
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                            </h3>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="account__form">
                                                <input type="text" name="" id="" placeholder="+91 9874563210" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search__holder__account">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="personal__text">
                                                Address
                                                <span><i class="fa-solid fa-pen-to-square"></i></span>
                                            </h3>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <form action="" method="post">
                                                <div id="dynamic-field-1" class="form-group dynamic-field">
                                                    <div class="account__form">
                                                        <textarea name="" id="" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="clearfix mt-4">
                                                    <button type="button" id="add-button" class="btn float-left shadow-sm">
                                                        Add Adress
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h2>Profile</h2>
                                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input type="checkbox" onclick="checkAll(this)" />
                                            </th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="" /></td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800 <button data-trigger="#my_offcanvas2" class="btn" type="button" data-toggle="tooltip" data-placement="top" title="Details"> <i class="fa-solid fa-chevron-right"></i> </button></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <h2>Contact</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Neque, eveniet earum. Sed accusantium eligendi molestiae
                                    quo hic velit nobis et, tempora placeat ratione rem
                                    blanditiis voluptates vel ipsam? Facilis, earum!
                                </p>
                            </div>
                            <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                                <h2>Contact</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Neque, eveniet earum. Sed accusantium eligendi molestiae
                                    quo hic velit nobis et, tempora placeat ratione rem
                                    blanditiis voluptates vel ipsam? Facilis, earum!
                                </p>
                            </div>
                            <div class="tab-pane fade" id="ticket" role="tabpanel" aria-labelledby="ticket-tab">
                                <h2>Contact</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Neque, eveniet earum. Sed accusantium eligendi molestiae
                                    quo hic velit nobis et, tempora placeat ratione rem
                                    blanditiis voluptates vel ipsam? Facilis, earum!
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-8 -->
                </div>
            </div>
        </div>
    </section>
</div>
@stop