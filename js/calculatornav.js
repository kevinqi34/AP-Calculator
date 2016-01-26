



//auto adjust height of adblockleft


$(document).ready(function(){


	$(window).on('load resize', function (){
	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)


if (w > 1350) {
	var h = $('#contents').height() + 260;


	$('#left').css("height", h);
	}else {

		$('#left').css("height", "auto");

	}
	});

});




//change icons

$(document).ready(function(){
$(window).on('load resize', function (){
var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)


if (w < 1350) {


for (var i = 1; i <=4; i++) {

$('#IMG' + i).css("width","110px");
$('#IMG' + i).attr("src","./test.png");


}













}






});





	});



//open category links



$(document).ready(function(){


		var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)


$('#contents').find('div.category').click(function(){


	var id = $(this).attr("id");
	//alert(id);

	$('#contents').css("display","none");

	id = id + "cat";

	$('#' + id).css("display","block");

	if (w > 1350) {
	var h = $('#main').height();

	//alert(h);

	$('#left').css("height", h);
}


	$(window).on('load resize', function (){


if (w > 1350) {

	var h = $('#main').height();



	$('#left').css("height", h);

	}else {

			$('#left').css("height", "auto");


		}

	});




	 $("html, body").animate({ scrollTop: 100 }, "slow");




	});










$('#APcat').find('div.category').click(function(){

	var id = $(this).attr("id");
	//alert(id);

	$('#APcat').css("display","none");

		id = "AP" +  id;

	$('#' + id).css("display","block");

	if (w > 1350) {
	var h = $('#main').height();

	//alert(h);

	$('#left').css("height", h);
}
$(window).on('load resize', function (){


if (w > 1350) {

	var h = $('#main').height();

	//alert(h);

	$('#left').css("height", h);

	}else {

			$('#left').css("height", "auto");


		}

	});


	 $("html, body").animate({ scrollTop: 100 }, "slow");



	});



$('#IBcat').find('div.category').click(function(){



	var id = $(this).attr("id");
	//alert(id);

	if (id == "TOK") {

		return;


	}else {

	$('#IBcat').css("display","none");

		id = "IB" +  id;


	$('#' + id).css("display","block");

	//alert(id);


//	alert(id);

	if (w > 1350) {
	var h = $('#main').height();

	//alert(h);

	$('#left').css("height", h);
}



		$(window).on('load resize', function (){


if (w > 1350) {

	var h = $('#main').height();



	$('#left').css("height", h);

	}else {

			$('#left').css("height", "auto");


		}

	});




	}

	 $("html, body").animate({ scrollTop: 100 }, "slow");
	});







$('#SATScat').find('div.category').click(function(){

	var id = $(this).attr("id");
	//alert(id);

	$('#SATScat').css("display","none");

		id = "SAT" +  id;

	$('#' + id).css("display","block");

	if (w > 1350) {
	var h = $('#main').height();

	//alert(h);

	$('#left').css("height", h);
}
$(window).on('load resize', function (){


if (w > 1350) {

	var h = $('#main').height();



	$('#left').css("height", h);

	}else {

			$('#left').css("height", "auto");


		}

	});


	 $("html, body").animate({ scrollTop: 100 }, "slow");

	});





});









function retur(a) {

	//alert(a);
		var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)




	var i = document.getElementById(a);



	i.style.display = "none";

	document.getElementById("contents").style.display = "block";


	if (w > 1350) {
	var h = $('#contents').height() + 150;



	$('#left').css("height", h);


	}




	}


function retur2(a) {

	//alert(a);

		var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)



	var i = document.getElementById(a);



	i.style.display = "none";

	document.getElementById("APcat").style.display = "block";


	if (w > 1350) {
	var h = $('#APcat').height() + 150;

//	alert(h);

	$('#left').css("height", h);



	}



	}


function retur3(a) {

	//alert(a);
		var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)




	var i = document.getElementById(a);



	i.style.display = "none";

	document.getElementById("IBcat").style.display = "block";


	if (w > 1350) {
	var h = $('#IBcat').height() + 150;

//	alert(h);

	$('#left').css("height", h);


	}




	}



	function retur4(a) {

	//alert(a);
		var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)




	var i = document.getElementById(a);



	i.style.display = "none";

	document.getElementById("SATScat").style.display = "block";


	if (w > 1350) {
	var h = $('#SATScat').height() + 150;

//	alert(h);

	$('#left').css("height", h);


	}




	}
