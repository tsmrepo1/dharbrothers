@extends('layouts.web')

@section('content')
<div class="main__body__wrapp">
  <div class="main__banner">
    <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": false, "margin": 25, "autoheight":true, "lazyload":true, "nav": true, "dots": false, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "450" :{ "items" : "1" } , "767" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
      @foreach($banners as $banner)
      <div class="slide-item">
        <div class="image__box">
          <img src="{{ Storage::url($banner->image) }}" alt="" />
        </div>
        <div class="banner__content">
          <div class="container">
            <div class="col-lg-9 col-md-12 col-sm-12 m-auto">
              <h3>{{ $banner->title1 }}</h3>
              <h2>{{ $banner->title2 }}</h2>
              <h1>{{ $banner->title3 }}</h1>
              <a href="#" class="oeder__holder">Order Thesis Online</a>
              <a href="#" class="need__help">Need Help? Contact Us</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <section class="about__wrapp">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 m-auto">
          <div class="about__dhar">
            <h2>About Dhar Brothers</h2>
            <img src="./web/images/line.jpg" alt="" class="ml-auto mr-auto d-block mt-4 line__holder" />

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
            <a href="#" class="know__more">Know More</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 m-auto">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
              <div class="box__icon">
                <div class="icon">
                  <img src="./web/images/icon_1.png" alt="" class="d-block icon__con" />
                </div>
                <h4>94 Years of Experience</h4>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
              <div class="box__icon">
                <div class="icon">
                  <img src="./web/images/icon_1.png" alt="" class="d-block icon__con" />
                </div>
                <h4>94 Years of Experience</h4>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
              <div class="box__icon">
                <div class="icon">
                  <img src="./web/images/icon_1.png" alt="" class="d-block icon__con" />
                </div>
                <h4>94 Years of Experience</h4>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
              <div class="box__icon">
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
  </section>

  <section class="ourservices">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2>Our Services</h2>
          <img src="./web/images/line1.jpg" alt="" class="d-block lineone" />
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
          <!-- Tabs nav -->
          <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            @php $i = 0; @endphp
            @foreach($services as $service) @php $i++; @endphp
            <a class="nav-link mb-3 <?php if ($i == 1) {
                                      echo 'active';
                                    } ?>" id="v-pills-{{$loop->iteration}}-tab" data-toggle="pill" href="#v-pills-{{$loop->iteration}}" role="tab" aria-controls="v-pills-{{$loop->iteration}}" aria-selected="true">
              <span class="">{{ $service->title }}</span>
            </a>
            @endforeach
          </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
          <!-- Tabs content -->
          <div class="tab-content" id="v-pills-tabContent">
            @php $i = 0; @endphp
            @foreach($services as $service) @php $i++; @endphp
            <div class="tab-pane fade <?php if ($i == 1) {
                                        echo 'show active';
                                      } ?>" id="v-pills-{{$loop->iteration}}" role="tabpanel" aria-labelledby="v-pills-{{$loop->iteration}}-tab">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                  <img src="./web/images/img_1.jpg" alt="" />
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                  <div class="text__holder">
                    <?php $string = substr($service->content, 0, 389) ?>
                    {!! $string !!}
                    <a href="{{ route('web.service', $service->slug) }}" class="more">Know More</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="testimonial__wrapp">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2>Customer Saying</h2>
          <img src="./web/images/line1.jpg" alt="" class="d-block lineone" />
        </div>
        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 25, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "450" :{ "items" : "1" } , "767" :{ "items" : "2" } , "1000":{ "items" : "3" }}}'>
          <?php foreach ($testimonials as $testimonial) { ?>
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
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <section class="getintouch">
    <div class="container">
      <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 m-auto">
        <div class="row box-shdow__one">
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
            <div class="get__img">
              <img src="./web/images/img_2.jpg" alt="">
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
            <div class="form__contacthome">
              <h2>Get In Touch</h2>
              <img src="./web/images/line1.jpg" alt="" class="d-block lineone">

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

    </div>
  </section>


  <section class="our__blog">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2>Visit Our Blog</h2>
          <img src="./web/images/line1.jpg" alt="" class="d-block lineone">
        </div>
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
        <div class="col-sm-12"><a href="{{ route('web.posts') }}" class="know__more">View All</a></div>
      </div>
    </div>
  </section>
</div>
@stop