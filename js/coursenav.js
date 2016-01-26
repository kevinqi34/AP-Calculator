$(document).ready(function(){
	
	
	$(window).on('load resize', function (){ 
	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
			
		
if (w > 1224) {
	var h = $('#content').height() + 170;	

	
	$('#left').css("height", h);
	}else {
		
		$('#left').css("height", "auto");
	
	}
	});
	
}); 