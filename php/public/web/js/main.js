$(function () {

	// rome(inline_cal, { time: false });


	rome(inline_cal_from, { time: false, inputFormat: 'MMMM DD, YYYY', dateValidator: rome.val.beforeEq(inline_cal_to) }).on('data', function (value) {
		result_from.value = value;
	});

	rome(inline_cal_to, { time: false, inputFormat: 'MMMM DD, YYYY', dateValidator: rome.val.afterEq(inline_cal_from) }).on('data', function (value) {
		result_to.value = value;
	});
});

//   < !--offcanvas -->
/// some script

// jquery ready start
$(document).ready(function () {
	// jQuery code

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