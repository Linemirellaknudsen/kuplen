/* BURGERMENU */
    $( "#burgermenu_btn" ).click(function() {
  		$( "#mobile_menu" ).slideToggle( "show-on-small" );
	});


    /* HEADER SCROLL */
	$(document).on("scroll", function() {
	    if($(document).scrollTop()>30) {
	        $("header").removeClass("color_top").addClass("color_scroll");
	    } 
	    else {
	        $("header").removeClass("color_scroll").addClass("color_top");
	    }
    });


	/* FACILITETER */
	$(".facilitet_1_btn").click(function(){
        $("#facilitet_1_tekst").slideToggle(1000);
        $('#facilitet_2_tekst').slideUp("fast");
        $('#facilitet_3_tekst').slideUp("fast");
        $('#facilitet_4_tekst').slideUp("fast");
    });
	$( ".facilitet_2_btn" ).click(function() {
  		$( "#facilitet_2_tekst" ).slideToggle(1000);
  		$('#facilitet_1_tekst').slideUp("fast");
        $('#facilitet_3_tekst').slideUp("fast");
        $('#facilitet_4_tekst').slideUp("fast");
	});
	$( ".facilitet_3_btn" ).click(function() {
  		$("#facilitet_3_tekst").slideToggle(1000);
  		$('#facilitet_2_tekst').slideUp("fast");
        $('#facilitet_1_tekst').slideUp("fast");
        $('#facilitet_4_tekst').slideUp("fast");
	});
	$( ".facilitet_4_btn" ).click(function() {
  		$("#facilitet_4_tekst").slideToggle(1000);
  		$('#facilitet_2_tekst').slideUp("fast");
        $('#facilitet_3_tekst').slideUp("fast");
        $('#facilitet_1_tekst').slideUp("fast");
	});


	/* EVENTS */
   	$( ".event_1_btn" ).click(function() {
  		$("#event_1_tekst").slideToggle(1000);
  		$('#event_2_tekst').slideUp("fast");
        $('#event_3_tekst').slideUp("fast");
	});
	$( ".event_2_btn" ).click(function() {
  		$("#event_2_tekst").slideToggle(1000);
  		$('#event_1_tekst').slideUp("fast");
        $('#event_3_tekst').slideUp("fast");
	});
	$( ".event_3_btn" ).click(function() {
  		$("#event_3_tekst").slideToggle(1000);
  		$('#event_2_tekst').slideUp("fast");
        $('#event_1_tekst').slideUp("fast");
	});


  $('#submitWeather').click(function(){
    
    var city = $('#city').val();
    
    if(city !== '') {
      
      $.ajax({
        
        url: "http://api.openweathermap.org/data/2.5/weather?q=" + city + "&units=metric" + "&APPID=819729367bc363163f0cbf848d9281b4",
        type: "GET",
        dataType: "jsonp",
        success: function(data){
          console.log(data);  
          
          var widget = show(data);
          
          $("#show").html(widget);
          
          $('#city').val('');
        }
        
      });
      
    } else {
      $('#error').html('Field cannot be empty!');
      
    }
  });



  function show(data){
  return  "<table id='vejr_table'>" +
      "<tr>" +
        "<td><img src='weatherIcons/" + data.weather[0].icon + ".png'></td>" + 
      "</tr>" +
      "<tr>" +
        "<td><h6>KØBENHAVN</h6></td>" + 
      "</tr>" +
      "<tr>" +
        "<td><h6>" + data.main.temp + "&degC</h6></td>" +
      "</tr>" +
      "</table>";
  	}

	/* CKLICK */
	jQuery(function(){
   		jQuery('#submitWeather').click();
	});


	/* DESKTOP MENU CKLICK */
	$('#menuomkuplen').click(function(){
		$('html,body').animate({
			scrollTop: $('#om_kuplen').offset().top - 81
		}, 500);
	});

	$('#menufaciliteter').click(function(){
		$('html,body').animate({
			scrollTop: $('#faciliteter').offset().top - 81
		}, 500);
	});

	$('#menuspise').click(function(){
		$('html,body').animate({
			scrollTop: $('#spise_1').offset().top - 81
		}, 500);
	});

	$('#menuevents').click(function(){
		$('html,body').animate({
			scrollTop: $('#events').offset().top - 81
		}, 500);
	});

	$('#menuabningstider').click(function(){
		$('html,body').animate({
			scrollTop: $('#abningstider_1').offset().top - 81
		}, 500);
	});

	$('#logo').click(function(){
		$('html,body').animate({
			scrollTop: $('#header_billede').offset().top - 0
		}, 500);
	});

	/* MOBILE MENU CKLICK */
	$('#mobileomkuplen').click(function(){
		$('html,body').animate({
			scrollTop: $('#om_kuplen').offset().top - 68
		}, 500);
		$('#mobile_menu').slideUp("slow");
	});

	$('#mobilefaciliteter').click(function(){
		$('html,body').animate({
			scrollTop: $('#faciliteter').offset().top - 68
		}, 500);
		$('#mobile_menu').slideUp("slow");
	});

	$('#mobilespise').click(function(){
		$('html,body').animate({
			scrollTop: $('#spise_1').offset().top - 68
		}, 500);
		$('#mobile_menu').slideUp("slow");
	});

	$('#mobileevents').click(function(){
		$('html,body').animate({
			scrollTop: $('#events').offset().top - 68
		}, 500);
		$('#mobile_menu').slideUp("slow");
	});

	$('#mobileabningstider').click(function(){
		$('html,body').animate({
			scrollTop: $('#abningstider_1').offset().top - 68
		}, 500);
		$('#mobile_menu').slideUp("slow");
	});




	/* MODAL */
	var modal = document.getElementById('myModal');

	var btn = document.getElementById("news_popup");

	var span = document.getElementsByClassName("close")[0];

	btn.onclick = function() {
    	modal.style.display = "block";
	}

	span.onclick = function() {
    	modal.style.display = "none";
	}

	window.onclick = function(event) {
    	if (event.target == modal) {
        modal.style.display = "none";
    	}
    }