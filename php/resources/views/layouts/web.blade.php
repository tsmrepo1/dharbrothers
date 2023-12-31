<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="color-sidebar sidebarcolor10">
@php
$permission = session('permission');
@endphp

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Dhar Brother | Index</title>
	<link href="{{url('web/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{url('web/css/custom-style.css')}}" rel="stylesheet" />
	<link href="{{url('web/css/step.css')}}" rel="stylesheet" />
	<link href="{{url('web/css/owl.css')}}" rel="stylesheet" />
	<link href="{{url('web/css/responsive.css')}}" rel="stylesheet" />
	<link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
</head>

<body>
	<header>
		<div class="top__header">
			<div class="container">
				<div class="row">
					<a href="#">
						<div class="location__header">
							<div class="icon"><i class="fa-solid fa-location-dot"></i></div>
							<p>4 Ram Mohan Roy Road, Kolkata 700009, WB, India</p>
						</div>
					</a>

					<a href="#">
						<div class="location__header">
							<div class="iconphone"><i class="fa-solid fa-phone"></i></div>
							<span>+( 91 ) 983 006 6537</span>
						</div>
					</a>
					<a href="#">
						<div class="location__header">
							<div class="iconphone"><i class="fa-solid fa-envelope"></i></div>
							<span>contactus@dharbrothers.com</span>
						</div>
					</a>

					<div class="login__header">
						@if(!Auth::check())
							<a href="{{ route('login') }}">LOGIN</a>
						@endif

						@if(Auth::check())
						<form method="POST" action="{{ route('logout') }}">
							@csrf
							<a href="javascript:;" onclick="parentNode.submit();">LOGOUT</a>
						</form>
						@endif
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg static-top">
			<div class="container main__header__content">
				<a class="navbar-brand" href="index.html"><img src="images/hader-logo.png" alt="" class="header__logo" /></a>
				<button class="navbar-toggler navbar-toggler-right hamburger-menu order-2" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav">
						<li><a href="{{ route('web.home') }}">Home</a></li>
						<li><a href="{{ route('web.about') }}">About Us</a></li>
						<li><a href="{{ route('web.services') }}">What We Do</a></li>
						<li><a href="{{ route('web.posts') }}">Blog</a></li>
						<li><a href="{{ route('web.testimonials') }}">Testimonial</a></li>
						<li><a href="{{ route('web.faq') }}">Faq</a></li>
						<li><a href="{{ route('web.contact') }}">Contact Us</a></li>
					</ul>
				</div>
				<div class="nav__holder">
					<div class="order__button">
						<a href="{{ route('web.order') }}">Order Thesis Online</a>
					</div>
				</div>
			</div>
		</nav>
	</header>

	@yield('content')

	@if(Session::has('success'))
	<script>
		toastr.success("{{ Session::get('success') }}");
	</script>
	@elseif(Session::has('error'))
	<script>
		toastr.error("{{ Session::get('error') }}");
	</script>
	@endif

	<footer class="footer__wrapp">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
					<div class="footer__logo">
						<a href="#"><img src="./images/hader-logo.png" alt=""></a>
					</div>
					<div class="footer__socialicon">
						<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#"><i class="fa-brands fa-twitter"></i></a>
						<a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
					<div class="footer__box">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Thesis On Demand</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">What We Do</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-1 col-xl-1">
					<div class="footer__box">
						<ul>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Faq</a></li>
							<li><a href="#">Contact us</a></li>

						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
					<div class="location__wrapp">
						<div class="footer__location">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="footer__locationtext">
							<h5>Call</h5>
							<a href="#">+( 91 ) 983 006 6537</a>
						</div>
					</div>
					<div class="location__wrapp">
						<div class="footer__location">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="footer__locationtext">
							<h5>Eamil</h5>
							<a href="#">contactus@dharbrothers.com</a>
						</div>
					</div>
					<div class="location__wrapp">
						<div class="footer__location">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="footer__locationtext">
							<h5>Address</h5>
							<p>4 Ram Mohan Roy Road, Kolkata 700009, WB, India</p>
						</div>
					</div>



				</div>
				<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
					<div class="subscribe__wrapp">
						<h4>Subscribe For The Latest News</h4>
						<div class="subscribe__form">
							<input type="text" placeholder="Email">
							<input type="submit" value="Submit">
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="down__footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p>© 2023 Dhar Brothers | All Rights Reserved </p>
					</div>
					<div class="col-sm-6">
						<ul>
							<li><a href="#">Terms of Service</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="{{url('web/vendor/jquery/jquery.slim.min.js')}}"></script>
	<script src="{{url('web/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://kit.fontawesome.com/2d537fef4a.js" crossorigin="anonymous"></script>
	<script src="{{url('web/js/core.js')}}"></script>
	<script src="{{url('web/js/owl.js')}}"></script>
	<script src="{{url('web/js/script.js')}}"></script>
	<script src="{{url('web/js/swiper.min.js')}}"></script>
	<script src="{{url('web/js/core.js')}}"></script>
	<script src="{{url('web/js/multistep.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/dropzone.js')}}"></script>
 	<script type="text/javascript" src="{{url('web/js/mainone.js')}}"></script>
	<script>
		$(document).ready(function () {
			// jQuery code
			$("#example").DataTable({
				aLengthMenu: [
				[5, 10, 25, -1],
				[5, 10, 25, "All"],
				],
				iDisplayLength: 5,
			});

			(function () {
				$(".hamburger-menu").on("click", function () {
				$(".bar").toggleClass("animate");
				});
			})();

			$("[data-trigger]").on("click", function (e) {
				e.preventDefault();
				e.stopPropagation();
				var offcanvas_id = $(this).attr('data-trigger');
				$(offcanvas_id).toggleClass("show");
				$('body').toggleClass("offcanvas-active");
				$(".screen-overlay").toggleClass("show");

			});


			// Close menu when pressing ESC
			$(document).on('keydown', function (event) {
				if (event.keyCode === 27) {
					$(".offcanvas").removeClass("show");
					$("body").removeClass("overlay-active");
				}
			});

			$(".btn-close, .screen-overlay").click(function (e) {
				$(".screen-overlay").removeClass("show");
				$(".offcanvas").removeClass("show");
				$("body").removeClass("offcanvas-active");
			});

		}); // jquery end

	</script>
</body>

</html>