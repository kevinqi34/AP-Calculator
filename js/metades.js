$(document).ready(function(){

	var a = $('#content').find("p:first").text();



	var a = a.replace("<b>", "");
	var a = a.replace("</b>", "");



	$('head').append('<meta name="description" content="' + a + '"/>');








});
