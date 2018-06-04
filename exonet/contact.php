<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/contact-grid.css">
	<link rel="stylesheet" type="text/css" href="styles/menu.css">
	<link rel="stylesheet" type="text/css" href="styles/offerte.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<title>
		Contact - Exonet Belgium
	</title>
</head>

<body>
	<div id="contact-grid">
		<div id="hamburger">
			<a href="#menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
		</div>

		<div id="menu">
			<img src="images/logo.jpg" alt="EXONET Belgium">
			<a href="jobs.php">Jobs</a>
			<a href="contact.php" class="btn active">Contact</a>
			<div class="dropdown">
				<a id="diensten-link" href="diensten.php">Diensten</a>
				<div class="dropdown-content">
					<a href="dienstendb.php?filter=schoonmaak">Schoonmaak</a>
					<a href="dienstendb.php?filter=opleveringsschoonmaak">Opleveringsschoonmaak</a>
					<a href="dienstendb.php?filter=vloerreiniging">Vloerreiniging</a>
					<a href="dienstendb.php?filter=klusjesdienst">Klusjesdienst</a>
					<a href="dienstendb.php?filter=tuinonderhoud">Tuinonderhoud</a>
					<a href="dienstendb.php?filter=computerreiniging">Computerreiniging</a>
				</div>
			</div>
			<a href="index.php">Home</a>
		</div>

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