<!DOCTYPE html>
<html>
<head>
	<title>KUPLEN</title>

	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link type="text/css" rel="stylesheet" href="style/materialize.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">


</head>
<body>
	<?php
		require_once('dbcon.php');

	      if(isset($_POST['cta'])){
	      $fornavn = filter_input(INPUT_POST, 'fornavn', FILTER_SANITIZE_STRING) or die('missing fornavn');
	      $efternavn = filter_input(INPUT_POST, 'efternavn', FILTER_SANITIZE_STRING) or die('missing efternavn');
	      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) or die('missing email');
	    
	      $sql = "INSERT INTO nyhedbrev(fornavn, efternavn, email) VALUES(?,?,?)";
	      $stmt = $conn->prepare($sql);
	      $stmt->bind_param('sss', $fornavn, $efternavn, $email);
	      $stmt->execute();
	    }
	?>




	<header class="color_top">
		<div class="row">

			<div class="col s8 m4 l3">
				<img class="col s12" id="logo" src="img/dome_logo_white.png">
			</div>
			
			<!-- MOBILE -->
			<div class="col s4 hide-on-med-and-up" id="mobile_menu_btn">
				<button id="burgermenu_btn">
					<img src="img/burgermenu.png">
				</button>
			</div>
			<div class="col s12" id="mobile_menu">
				<ul>
					<a href="javascript:void(0);" id="mobileomkuplen"><li><h4>ABOUT THE DOME</h4></li></a>
					<a href="javascript:void(0);" id="mobilefaciliteter"><li><h4>FACILITIES</h4></li></a>
					<a href="javascript:void(0);" id="mobilespise"><li><h4>FOOD</h4></li></a>
					<a href="javascript:void(0);" id="mobileevents"><li><h4>EVENTS</h4></li></a>
					<a href="javascript:void(0);" id="mobileabningstider"><li><h4>OPNING HOURS</h4></li></a>
					<a href="index.php"><li>
						<img src="img/dansk_flag.png">
					</li></a>
				</ul>
			</div>

			<!-- DESKTOP -->
			<div class="col m8 l9 hide-on-small-only" id="desktop_menu">
				<a href="javascript:void(0);" id="menuomkuplen">ABOUT THE DOME</a>
				<a href="javascript:void(0);" id="menufaciliteter">FACILITIES</a>
				<a href="javascript:void(0);" id="menuspise">FOOD</a>
				<a href="javascript:void(0);" id="menuevents">EVENTS</a>
				<a href="javascript:void(0);" id="menuabningstider">OPNING HOURS</a>
				<a href="index_engelsk.php">
					<img src="img/engelsk_flag.png">
				</a>
				<a href="index.php">
					<img src="img/dansk_flag.png">
				</a>
			</div>

		</div>
	</header>

	<div class="row">

		<div class="col s12" id="header_billede">
			<img class="col s12" src="img/header_billede.gif">
		</div>

		<div class="col s12" id="om_kuplen">
			<div class="col s12">
				<h5 id="color_light_blue">ABOUT</h5>
			</div>
			<div class="col s12" id="om_kuplen_tekst">
				<p>Get closer to heaven - all the way down to earth. With THE DOME's large glass panels and amazing location in Terminal 3, you and the family can experience something extraordinary. Copenhagen Airport is no longer a gateway to the world, but a travel destination for those who just love to spot planes. The combination of amazing views, fun atmosphere and delicious food makes THE DOME the ideal destination!</p>
			</div>
		</div>

		<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>

		<div class="col s12" id="faciliteter">
			<h5 id="color_light_blue">FACILITIES</h5>
		</div>

		<div class="col s12">
			<div class="col s3 small_pic_div facilitet_1_btn">
				<img class="small_pic" src="img/facilitet_1_engelsk.png">
			</div>
			<div class="col s3 small_pic_div facilitet_2_btn">
				<img class="small_pic" src="img/facilitet_2_engelsk.png">
			</div>
			<div class="col s3 small_pic_div facilitet_3_btn">
				<img class="small_pic" src="img/facilitet_3_engelsk.png">
			</div>
			<div class="col s3 small_pic_div facilitet_4_btn">
				<img class="small_pic" src="img/facilitet_4_engelsk.png">
			</div>
		</div>
		<div class="col s12">
			<div class="col s12" id="facilitet_1_tekst">
				<h6>BINOCULARS AREA</h6>
				<p>In The DOME we have a binoculars area where there is free use. The binoculars are mounted to the ratchet, but can be moved smoothly. It is also allowed to bring your own equipment. <br>
				In the binocular area there are also interactive screens, where the children can learn more about the history of the sky - everything from the first flight to fun information about weight, space, procedures, etc. The binocular area offers experiences of all ages, and everyone is welcome!</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
			<div class="col s12" id="facilitet_2_tekst">
				<h6>PLAY AREA</h6>
				<p>While father and mother enjoy a hot cup of coffee or spotting planes, the children can be entertained with a playground where a lot of hours can fly quickly. The play area is primarily for children between 5-12 years.</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
			<div class="col s12" id="facilitet_3_tekst">
				<h6>LOUNGE AREA</h6>
				<p>In the lounge area you can relax in soft furniture, with peace and quiet to enjoy the great view. Here you will also find free Wi-Fi and charging stations. Feel at home!</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
			<div class="col s12" id="facilitet_4_tekst">
				<h6>FOOD AREA</h6>
				<p>At Café A you can enjoy everything from a delicious brunch plate, to club sandwich, burger, pasta dishes and more. If you also love a casual coffee and eatery that offers classic cafe food at prices where we can all join, Cafe A is the perfect match.</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
		</div>

		<div class="col s12" id="spise_1">
			<div class="col s12" id="food_gif">
				<img class="col s12" src="img/food.gif">
			</div>
			<div class="col s12" id="spise">
				<h5>FOOD</h5>
				<p>At Café A you can enjoy everything from a delicious brunch plate, to club sandwich, burger, pasta dishes and more. If you also love a casual coffee and eatery that offers classic cafe food at prices where we all can join, Cafe A is the perfect match. <br> <br>
				Cafe A's vision is to offer quality food at prices where everyone can follow. The menu card is simple, simple and not too wide, yet there is something for everyone - including the children!</p>

				<a href="https://www.cafe-a.dk/menukort/"><div id="se_menu">
					SEE MENU
				</div></a>
			</div>
		</div>


		<div class="col s12" id="events">
			<h5 id="color_light_blue">EVENTS</h5>
		</div>
		<div class="col s12" id="events">
			<p>If you are a flight interested, our events are certainly relevant to you! We have more than just a nice eatery and amazing views. Keep an eye on our event section or subscribe to our newsletter to be updated on all events, where we hold competitions, launches and festive events in honor of the big metal birds.</p>
		</div>

		<div class="col s12" id="events_btns">
			<div class="col s4 small_pic_div event_1_btn">
				<img class="small_pic" src="img/event_1_engelsk.png">
			</div>
			<div class="col s4 small_pic_div event_2_btn">
				<img class="small_pic" src="img/event_2.png">
			</div>
			<div class="col s4 small_pic_div event_3_btn">
				<img class="small_pic" src="img/event_3_engelsk.png">
			</div>
		</div>
		<div class="col s12">
			<div class="col s12" id="event_1_tekst">
				<h6>ÅBNINGSFEST</h6>
				<p>We celebrate the opening of the THE DOME! Come join our housewarming on July 1st from 11-13 where there will be anything from vouchers to delicious food, cupcake, music, fun and play.</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
			<div class="col s12" id="event_2_tekst">
				<h6>A350-900</h6>
				<p>In May, it opened the direct route with Cathay Pacific from Copenhagen to Hong Kong. <br>
				D. June 20th, the major A350-900 will make test flights at the airport, where twisting, braking and modeling will be tested. Are you also fascinated by the big A350s?
				So, take the coolest pictures and look far with the binoculars from 8-12.</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
			<div class="col s12" id="event_3_tekst">
				<h6>FLYSPOTNINGSKONKURENCE</h6>
				<p>Saturday 7th of July we hold THE DOME's first event in honor of the incarnate airplanes! There will be competition in the most registrations and best snapshots throughout the day. Are you also aerospace with blood contest, this event is perfect for you. <br>
				Tea and coffee will be served throughout the event.</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
		</div>


		<div class="col s12" id="abningstider_1">

			<div class="col s12" id="abningstider_vejr">
				<h5 id="color_light_blue">OPENING HOURES & WEATHER</h5>
				
				<div class="col s12 m6" id="abningstider">
					<div class="col s6" id="dage">
						<p>
							Monday:<br>
							Tuesday:<br>
							Wednesday:<br>
							Thursday:<br>
							Friday:<br>
							Saturday:<br>
							Sunday:
						</p>
					</div>
					<div class="col s6" id="tider">
						<p>
							08:00-20.00<br>
							08:00-20.00<br>
							08:00-20.00<br>
							08:00-20.00<br>
							08:00-23.00<br>
							08:00-23.00<br>
							08:00-23.00
						</p>
					</div>
				</div>

				<div class="col s12 m6" id="vejr">
					<div id="sog_vejr">
        				<input type="text" name="city" id="city" value="copenhagen">
        				<button id="submitWeather"></button>
      				</div>
      
      				<div id="show"></div>
				</div>
			</div>


			<div class="col s12" id="dome">
				<img class="col s12 hide-on-med-and-down" src="img/mini_dome.png">
				<img class="col s12 hide-on-large-only" src="img/mini_dome_small.png">
			</div>

		</div>

		<div class="col s12" id="footer">
			<p>
				© THE DOME<br>
				Arkadevej, Terminal 3 · 2770 Kastrup<br>
				+45 12 34 56 78<br>
			</p>
		</div>





		<div class="col s2 m1" id="news">
			<h6>TO YOU</h6>
			
			<button class="col s12 l8 side_btn" id="news_popup">
			    <img class="col s12" src="img/nyhedsbrev_icon_white.png">
			</button>
			
			<button class="col s12 l8 side_btn">
				<a href="https://www.cph.dk/flyinformation/afgange/">
					<img class="col s12" src="img/plane_icon_white.png">
				</a>
			</button>
		</div>
	</div>




<div id="myModal" class="modal">
  <div class="modal-content row">
  	<img class="col s6" src="img/plakat_fam_stander.png">
    <span class="close">&times;</span>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="col s6">
    	<input class="input_felt" type="text" name="fornavn" placeholder="FIRSTNAME">
    	<input class="input_felt" type="text" name="efternavn" placeholder="SURNAME">
    	<input class="input_felt" type="email" name="email" placeholder="EMAIL">
    	<input id="cta" type="submit" name="cta" value="SIGN ME UP">
    </form>
  </div>
</div>





<script type="text/javascript">

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
        $("#facilitet_1_tekst").slideToggle("slow");
    });
	$( ".facilitet_2_btn" ).click(function() {
  		$( "#facilitet_2_tekst" ).slideToggle( "show" );
	});
	$( ".facilitet_3_btn" ).click(function() {
  		$( "#facilitet_3_tekst" ).slideToggle( "show" );
	});
	$( ".facilitet_4_btn" ).click(function() {
  		$( "#facilitet_4_tekst" ).slideToggle( "show" );
	});


	/* EVENTS */
   	$( ".event_1_btn" ).click(function() {
  		$( "#event_1_tekst" ).slideToggle( "show" );
	});
	$( ".event_2_btn" ).click(function() {
  		$( "#event_2_tekst" ).slideToggle( "show" );
	});
	$( ".event_3_btn" ).click(function() {
  		$( "#event_3_tekst" ).slideToggle( "show" );
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
        "<td><h6>COPENHAGEN</h6></td>" + 
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
			scrollTop: $('#om_kuplen').offset().top - 83
		}, 500);
	});

	$('#menufaciliteter').click(function(){
		$('html,body').animate({
			scrollTop: $('#faciliteter').offset().top - 83
		}, 500);
	});

	$('#menuspise').click(function(){
		$('html,body').animate({
			scrollTop: $('#spise_1').offset().top - 83
		}, 500);
	});

	$('#menuevents').click(function(){
		$('html,body').animate({
			scrollTop: $('#events').offset().top - 83
		}, 500);
	});

	$('#menuabningstider').click(function(){
		$('html,body').animate({
			scrollTop: $('#abningstider_1').offset().top - 83
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

</script>
</body>
</html>