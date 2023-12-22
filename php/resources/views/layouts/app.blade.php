<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="color-sidebar sidebarcolor10">
@php
$permission = session('permission');
@endphp

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!--favicon-->
	<link rel="icon" href="{{ url('assets/images/logo-icon.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{url('public/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<link res="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.css"> -->

	<!-- Bootstrap CSS -->
	<link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ url('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ url('assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ url('assets/css/header-colors.css') }}" />
	<script src="{{ url('assets/js/jquery.min.js') }}"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

	<link href="{{asset('assets/plugins/smart-wizard/css/smart_wizard_all.min.css')}}" rel="stylesheet" type="text/css" />
	<script src="{{asset('assets/plugins/smart-wizard/js/jquery.smartWizard.min.js')}}"></script>

	<script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

	<!-- toastr css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
	<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
	<title>{{ config('app.name', 'Laravel') }}</title>

	<style>
		.is-invalid {
			border-color: red;
		}
	</style>

</head>

<body class="  pace-done">
	<div class="pace  pace-inactive">
		<div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
			<div class="pace-progress-inner"></div>
		</div>
		<div class="pace-activity"></div>
	</div>
	<!--wrapper-->
	<div class="wrapper">

		{{ $slot }}



		@stack('modals')

		@livewireScripts

		<!-- Bootstrap JS -->
		<script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
		<!--plugins-->
		<script src="{{ url('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
		<script src="{{ url('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
		<script src="{{ url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
		<script src="{{ url('assets/plugins/select2/js/select2.min.js') }}"></script>
		<script src="https://kit.fontawesome.com/33af1b3f60.js" crossorigin="anonymous"></script>
		<script>
			new PerfectScrollbar('.dashboard-top-countries');
		</script>
		<script src="{{ url('assets/js/index.js') }}"></script>
		<!-- toastr js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<!--<script>-->
		<!--    $(document).ready(function() {-->
		<!--        let table = new DataTable('#datatable');-->
		<!--    })-->
		<!--</script>-->
		<script>
			$('.single-select').select2({
				theme: 'bootstrap4',
				width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
				placeholder: $(this).data('placeholder'),
				allowClear: Boolean($(this).data('allow-clear')),
			});
			$('.multiple-select').select2({
				theme: 'bootstrap4',
				width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
				placeholder: $(this).data('placeholder'),
				allowClear: Boolean($(this).data('allow-clear')),
			});
		</script>
		<script>
			$(document).ready(function() {
				// Toolbar extra buttons
				var btnFinish = $('<button></button>').text('Finish').addClass('btn btn-info').on('click', function() {
					alert('Finish Clicked');
				});
				var btnCancel = $('<button></button>').text('Cancel').addClass('btn btn-danger').on('click', function() {
					$('#smartwizard').smartWizard("reset");
				});
				// Step show event
				$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
					$("#prev-btn").removeClass('disabled');
					$("#next-btn").removeClass('disabled');
					if (stepPosition === 'first') {
						$("#prev-btn").addClass('disabled');
					} else if (stepPosition === 'last') {
						$("#next-btn").addClass('disabled');
					} else {
						$("#prev-btn").removeClass('disabled');
						$("#next-btn").removeClass('disabled');
					}
				});
				// Smart Wizard
				$('#smartwizard').smartWizard({
					selected: 0,
					theme: 'arrows',
					transition: {
						animation: 'slide-horizontal', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
					},
					toolbarSettings: {
						toolbarPosition: 'bottom', // both bottom
						toolbarExtraButtons: [btnFinish, btnCancel]
					}
				});
				// External Button Events
				$("#reset-btn").on("click", function() {
					// Reset wizard
					$('#smartwizard').smartWizard("reset");
					return true;
				});
				$("#prev-btn").on("click", function() {
					// Navigate previous
					$('#smartwizard').smartWizard("prev");
					return true;
				});
				$("#next-btn").on("click", function() {
					// Navigate next
					$('#smartwizard').smartWizard("next");
					return true;
				});
				// Demo Button Events
				$("#got_to_step").on("change", function() {
					// Go to step
					var step_index = $(this).val() - 1;
					$('#smartwizard').smartWizard("goToStep", step_index);
					return true;
				});
				$("#is_justified").on("click", function() {
					// Change Justify
					var options = {
						justified: $(this).prop("checked")
					};
					$('#smartwizard').smartWizard("setOptions", options);
					return true;
				});
				$("#animation").on("change", function() {
					// Change theme
					var options = {
						transition: {
							animation: $(this).val()
						},
					};
					$('#smartwizard').smartWizard("setOptions", options);
					return true;
				});
				$("#theme_selector").on("change", function() {
					// Change theme
					var options = {
						theme: $(this).val()
					};
					$('#smartwizard').smartWizard("setOptions", options);
					return true;
				});
			});
		</script>
		<script>
			$(document).ready(function() {
				$(".search-control").on("keyup", function() {
					var value = $(this).val().toLowerCase();
					$("table tbody tr").filter(function() {
						$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
					});
				});
			});
		</script>
		<!--app JS-->
		<script src="{{ url('assets/js/app.js') }}"></script>

		@if(Session::has('success'))
		<script>
			toastr.success("{{ Session::get('success') }}");
		</script>
		@elseif(Session::has('error'))
		<script>
			toastr.error("{{ Session::get('error') }}");
		</script>
		@endif
</body>

</html>