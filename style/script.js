$(document).ready(function(){
	$('#menuomkuplen').click(function(){
			$('html,body').animate({
				scrollTop: $('#om_kuplen').offset().top - 85
			}, 500);
		});
}
