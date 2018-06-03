<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/menu.css">
	<link rel="stylesheet" type="text/css" href="styles/diensten-grid.css">
	<link rel="stylesheet" type="text/css" href="styles/slideshow.css">
	<link rel="stylesheet" type="text/css" href="styles/diensten.css">
	<link rel="stylesheet" type="text/css" href="styles/offerte.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<title>
		Diensten - Exonet Belgium
	</title>
</head>

<body>
	<div id="diensten-grid">
		<div id="hamburger">
			<a href="#menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
		</div>
		
		<div id="menu">
			<img src="images/logo.jpg">
			<a href="jobs.php">Jobs</a>
			<a href="contact.php">Contact</a>
			<div class="dropdown">
				<a class="btn actief" id="diensten-link" href="diensten.php">Diensten</a>
				<div class="dropdown-content">
				<a href="dienstendb.php?filter=schoonmaak">Schoonmaak</a>
				<a href="dienstendb.php?filter=opleveringsschoonmaak">Opleveringsschoonmaak</a>
				<a href="dienstendb.php?filter=vloerreiniging">Vloerreiniging</a>
					<a href="dienstendb.php?filter=klusjesdienst">Klusjesdienst</a>
					<a href="dienstendb.php?filter=tuinonderhoud">Tuinonderhoud</a>
					<a href="dienstendb.php?filter=computerreiniging">Computerreiniging</a>
				</div>
			</div>
			<a href="home.php">Home</a>
		</div>

		<div class="slideshow-container">
			<div class="mySlides fade">
				<img src="images/img2.jpg">
				<div class="text">Verhuizingen</div>
			</div>

			<div class="mySlides fade">
				<img src="images/img1.jpg">
				<div class="text">Dakgoten reinigen</div>
			</div>

			<div class="mySlides fade">
				<img src="images/img3.jpg">
				<div class="text">Vloerreiniging</div>
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
			
			<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		</div>

		</div>
		<br>

		

		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
				showSlides(slideIndex += n);
			}

			function currentSlide(n) {
				showSlides(slideIndex = n);
			}

			function showSlides(n) {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				if (n > slides.length) {
					slideIndex = 1
				}
				if (n < 1) {
					slideIndex = slides.length
				}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
			}
		</script>

		<div id="diensten">
			<div id="txt-diensten">
				<p>Onze diensten</p>
				<hr>
			</div>
			
			<div id="tabs-diensten">
				<a href="dienstendb.php?filter=schoonmaak"><button id="tab1" class="tablink" onclick="openPage('schoonmaak', this, 'darkgray')" id="defaultOpen">SCHOONMAAK</button></a>
				<a href="dienstendb.php?filter=opleveringsschoonmaak"><button id="tab2" class="tablink" onclick="openPage('opleveringsschoonmaak', this, 'darkgray')">OPLEVERINGSSCHOONMAAK</button></a>
				<a href="dienstendb.php?filter=vloerreiniging"><button id="tab3" class="tablink" onclick="openPage('vloerreiniging', this, 'darkgray')">VLOERREINIGING</button></a>
				<a href="dienstendb.php?filter=klusjesdienst"><button id="tab4" class="tablink" onclick="openPage('klusjesdienst', this, 'darkgray')">KLUSJESDIENST</button></a>
				<a href="dienstendb.php?filter=tuinonderhoud"><button id="tab5" class="tablink" onclick="openPage('tuinonderhoud', this, 'darkgray')">TUINONDERHOUD</button></a>
				<a href="dienstendb.php?filter=computerreiniging"><button id="tab6" class="tablink" onclick="openPage('computerreiniging', this, 'darkgray')">COMPUTERREINIGING</button></a>
			</div>
		</div>
		
		<script>
				function openPage(pageName, elmnt, color) {
					var i, tabcontent, tablinks;
					tabcontent = document.getElementsByClassName("tabcontent");
					for (i = 0; i < tabcontent.length; i++) {
						tabcontent[i].style.display = "none";
					}
					tablinks = document.getElementsByClassName("tablink");
					for (i = 0; i < tablinks.length; i++) {
						tablinks[i].style.backgroundColor = "";
					}
					document.getElementById(pageName).style.display = "block";
					elmnt.style.backgroundColor = color;
				}
			document.getElementById("defaultOpen").click();
		</script>

		<div id="offerte">
			<div id="txt-offerte">
				<p>Professionele schoonmaak</p>
				<hr>
			</div>
			
			<div id="info-offerte">
				Voor kantoren, commerciële panden, magazijnen, praktijken, horeca,....
			</div>

			<div id="offerte-input">
				<form class="w3-container w3-card-4 w3-light-grey">
					<p>
						<input class="input" type="text" placeholder="Bedrijf">
					</p>

					<p>
						<input class="input w3-border-0" type="text" placeholder="Telefoonnummer">
					</p>

					<p>
						<input class="input w3-border-0" type="text" placeholder="E-mail adres">
					</p>

					<p>
						<input class="input w3-border-0" type="text" placeholder="Onderwerp">
					</p>

					<a href="#" class="input-button ">
						<i class="fa fa-paper-plane"> VRAAG OFFERTE AAN </i> 
					</a>
				</form>
			</div>

			<div id="map" style="width:100%;height:350px">
				<script>
					function myMap() {
						var myCenter = new google.maps.LatLng(51.1706826, 4.3640062);
						var mapCanvas = document.getElementById("map");
						var mapOptions = {
							center: myCenter,
							zoom: 17
						};
						var map = new google.maps.Map(mapCanvas, mapOptions);
						var marker = new google.maps.Marker({
							position: myCenter
						});
						marker.setMap(map);
					}
				</script>

				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFdPNRGVuqgWT_zmzLJgY57W4EvPz7wEU&callback=myMap"></script>
			</div>
		</div>

		<div id="footer">
			2018 © Copyright EXONET Belgium.
		</div>

	</div>
</body>
</html>