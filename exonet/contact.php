<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/contact-grid.css">
	<link rel="stylesheet" type="text/css" href="styles/menu.css">
	<link rel="stylesheet" type="text/css" href="styles/offerte.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">

	<title>
		Contact - Exonet Belgium
	</title>
</head>

<body>
	<div id="contact-grid">

		<div id="menu">
			<img src="images/logo.jpg">
			<a href="jobs.php">Jobs</a>
			<a href="contact.php">Contact</a>
			<a href="diensten.php">Diensten</a>
			<a href="home.php">Home</a>
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
						<input class="input w3-border-0" type="text" placeholder="Bericht">
					</p>

					<button class="input-button ">
								<a href="#">VRAAG OFFERTE AAN</a>
					</button>
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
			EXONET Belgium ®
		</div>

	</div>
</body>
</html>