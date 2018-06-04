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

			<div class="col s8 m4 l2">
				<img class="col s12" id="logo" src="img/logo_white.png">
			</div>
			
			<!-- MOBILE -->
			<div class="col s4 m8 hide-on-large-only" id="mobile_menu_btn">
				<button id="burgermenu_btn">
					<img src="img/burgermenu.png">
				</button>
			</div>
			<div class="col s12" id="mobile_menu">
				<ul>
					<a href="javascript:void(0);" id="mobileomkuplen"><li><h4>OM KUPLEN</h4></li></a>
					<a href="javascript:void(0);" id="mobilefaciliteter"><li><h4>FACILITETER</h4></li></a>
					<a href="javascript:void(0);" id="mobilespise"><li><h4>SPISE</h4></li></a>
					<a href="javascript:void(0);" id="mobileevents"><li><h4>EVENTS</h4></li></a>
					<a href="javascript:void(0);" id="mobileabningstider"><li><h4>ÅBNINGSTIDER</h4></li></a>
					<a href="index_engelsk.php"><li>
						<img src="img/engelsk_flag.png">
					</li></a>
				</ul>
			</div>

			<!-- DESKTOP -->
			<div class="col l10 hide-on-med-and-down" id="desktop_menu">
				<a href="javascript:void(0);" id="menuomkuplen">OM KUPLEN</a>
				<a href="javascript:void(0);" id="menufaciliteter">FACILITETER</a>
				<a href="javascript:void(0);" id="menuspise">SPISE</a>
				<a href="javascript:void(0);" id="menuevents">EVENTS</a>
				<a href="javascript:void(0);" id="menuabningstider">ÅBNINGSTIDER</a>
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
				<h5 id="color_light_blue">OM KUPLEN</h5>
			</div>
			<div class="col s12" id="om_kuplen_tekst">
				<p>Kom langt op i højden – helt nede på jorden. Med KUPLEN’s store glaspartier og fantastiske placering i Terminal 3, kan du og familien opleve noget helt ekstraordinært. Københavns Lufthavn er ikke længere en gateway ud i verden, men et udflugtssted for dig som bare elsker at spotte fly. Kombinationen af en fantastisk udsigt, rolig atmosfære og delikat mad gør KUPLEN til den idéelle udflugtsdestination!</p>
			</div>
		</div>

		<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>

		<div class="col s12" id="faciliteter">
			<h5 id="color_light_blue">FACILITETER</h5>
		</div>

		<div class="col s12">
			<div class="col s3 small_pic_div facilitet_1_btn">
				<img class="small_pic" src="img/facilitet_1.jpg">
			</div>
			<div class="col s3 small_pic_div facilitet_2_btn">
				<img class="small_pic" src="img/facilitet_2.jpg">
			</div>
			<div class="col s3 small_pic_div facilitet_3_btn">
				<img class="small_pic" src="img/facilitet_3.jpg">
			</div>
			<div class="col s3 small_pic_div facilitet_4_btn">
				<img class="small_pic" src="img/facilitet_4.jpg">
			</div>
		</div>
		<div class="col s12">
			<div class="col s12" id="facilitet_1_tekst">
				<h6>KIKKERTOMRÅDE</h6>
				<p>I KUPLEN har vi et kikkertområde, hvor der er fri afbenyttelse. Kikkerterne er monteret til rælingen, men kan godt bevæges rundt. Det er også tilladt at medbringe eget udstyr. <br>
				I kikkertområdet findes også interaktive skærme, hvorpå børnene kan lære meget mere om luftrummets historie – alt fra de første fly til sjove informationer om vægt, plads, procedurer osv. Kikkertområdet rummer oplevelser til alle aldre, og alle er velkomne!</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
			<div class="col s12" id="facilitet_2_tekst">
				<h6>LEGEOMRÅDE</h6>
				<p>Imens far og mor nyder en varm kop kaffe eller spotter fly, kan børnene underholdes med en legeplads, hvor en masse timer hurtigt kan flyve afsted. Legeområdet er primært til børn mellem 5-12 år.</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
			<div class="col s12" id="facilitet_3_tekst">
				<h6>LOUNGEOMRÅDE</h6>
				<p>I loungeområdet kan du slappe af i bløde møbler, med ro og fred til at nyde den gode udsigt. Her finder du også gratis Wi-Fi og opladerstationer. Føl dig hjemme!</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
			<div class="col s12" id="facilitet_4_tekst">
				<h6>SPISEOMRÅDE</h6>
				<p>Hos Café A kan du nyde alt fra en lækker brunchplatte, til clubsandwich, burger, pastaretter og meget mere. Elsker du også et afslappet kaffe- og spisested, som tilbyder klassisk cafe-mad til priser, hvor vi alle kan være med, så er Cafe A det perfekte match.</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
		</div>

		<div class="col s12" id="spise_1">
			<div class="col s12" id="food_gif">
				<img class="col s12" src="img/food.gif">
			</div>
			<div class="col s12" id="spise">
				<h5>SPISE</h5>
				<p>Hos Café A kan du nyde alt fra en lækker brunchplatte, til clubsandwich, burger, pastaretter og meget mere. Elsker du også et afslappet kaffe- og spisested, som tilbyder klassisk cafe-mad til priser, hvor vi alle kan være med, så er Cafe A det perfekte match.<br><br>
				Cafe A’s vision er, at tilbyde kvalitetsfuld mad til priser, hvor alle kan følge med. Menukortet er simpelt, enkelt og ikke alt for bredt, men alligevel er der noget for alle – også børnene!</p>

				<a href="https://www.cafe-a.dk/menukort/"><div id="se_menu">
					SE MENU
				</div></a>
			</div>
		</div>


		<div class="col s12" id="events">
			<h5 id="color_light_blue">EVENTS</h5>
		</div>
		<div class="col s12" id="events">
			<p>Hvis du er flyinteresseret, er vores events helt sikkert relevant for dig! Vi rummer mere, end blot et dejligt spisested og fantastiske udsigter. Hold øje med vores eventsektion, eller skriv dig op til vores nyhedsbrev, for at være opdateret på alle begivenhederne, hvor vi både holder konkurrencer, lanceringer og festlige begivenheder til ære for de store metalfugle.</p>
		</div>

		<div class="col s12" id="events_btns">
			<div class="col s4 small_pic_div event_1_btn">
				<img class="small_pic" src="img/event_1.png">
			</div>
			<div class="col s4 small_pic_div event_2_btn">
				<img class="small_pic" src="img/event_2.png">
			</div>
			<div class="col s4 small_pic_div event_3_btn">
				<img class="small_pic" src="img/event_3.png">
			</div>
		</div>
		<div class="col s12">
			<div class="col s12" id="event_1_tekst">
				<h6>ÅBNINGSFEST</h6>
				<p>Vi fejrer åbningen af KUPLEN! Kom og vær med til vores housewarming d. 1 juli fra 11-13 hvor der vil være alt fra vouchers til lækker mad, cupcakeuddeling, musik, sjov og leg.</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
			<div class="col s12" id="event_2_tekst">
				<h6>A350-900</h6>
				<p>I maj åbnede den direkte rute med Cathay Pacific fra København til Hongkong. <br>
				D. 20 juni skal den store A350-900 lave testflyvninger i lufthavnen, hvor vridning, bremse og modellering bliver testet. Er du også fascineret af den store A350’er? 
				Så vær med til at tage de sejeste billeder og kigge langt med kikkerten fra 8-12.</p> <br>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
			<div class="col s12" id="event_3_tekst">
				<h6>FLYSPOTNINGSKONKURENCE</h6>
				<p>Lørdag d. 7 juli afholder vi KUPLEN’s første event til ære for de inkarnerede flyspottere! Der vil hele dagen være konkurrence i henholdsvis flest registreringer og bedste snapshot. Er du også flyspotter med konkurrence i blodet, så er dette event perfekt for dig. <br>
				Der vil under hele eventet blive serveret te og kaffe.</p>
				<div class="col s4 l5"></div><div class="col s4 l2 opdeler"></div><div class="col s4 l5"></div>
			</div>
		</div>


		<div class="col s12" id="abningstider_1">

			<div class="col s12" id="abningstider_vejr">
				<h5 id="color_light_blue">ÅBNINGSTIDER & VEJR</h5>
				
				<div class="col s12 m6" id="abningstider">
					<div class="col s6" id="dage">
						<p>
							Mandag:<br>
							Tirsdag:<br>
							Onsdag:<br>
							Torsdag:<br>
							Fredag:<br>
							Lørdag:<br>
							Søndag:
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
				© KUPLEN<br>
				Arkadevej, Terminal 3 · 2770 Kastrup<br>
				+45 12 34 56 78<br>
			</p>
		</div>





		<div class="col s2 m1" id="news">
			<h6>TIL DIG</h6>
			
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
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="col s12 l6">
    	<label>NYHEDSBREV</label>
    	<input class="input_felt" type="text" name="fornavn" placeholder="FORNAVN">
    	<input class="input_felt" type="text" name="efternavn" placeholder="EFTERNAVN">
    	<input class="input_felt" type="email" name="email" placeholder="EMAIL">
    	<input id="cta" type="submit" name="cta" value="SKRIV MIG OP">
    </form>
  </div>
</div>





<script src="style/script.js"></script>
</body>
</html>