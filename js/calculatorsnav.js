$(document).ready(function(){


	$(window).on('load resize', function (){
	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)


if (w > 1350) {
	var h = $('#home').height() + 280;

		//alert($('#home').height());

	$('#left').css("height", h);
	}else {

		$('#left').css("height", "auto");

	}
	});

});
