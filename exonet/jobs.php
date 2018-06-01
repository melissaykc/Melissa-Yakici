<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/jobs-grid.css">
	<link rel="stylesheet" type="text/css" href="styles/menu.css">
	<link rel="stylesheet" type="text/css" href="styles/jobs.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<title>
		Jobs - Exonet Belgium
	</title>
</head>

<body>
	<div id="jobs-grid">
<div id="hamburger">
      <a href="#menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
    </div>
		<div id="menu">
			<img src="images/logo.jpg">
			<a href="jobs.php">Jobs</a>
			<a href="contact.php">Contact</a>
			<a href="diensten.php">Diensten</a>
			<a href="home.php">Home</a>
		</div>

		<div id="jobs">
			<div id="txt-jobs">
				<p>Solliciteren</p>
				<hr>
			</div>
			<div id="info-jobs">
				Hier kan u online solliciteren voor een eventueel openstaande vacature.
			</div>

			<div id="jobs-input">
				<form class="w3-container w3-card-4 w3-light-grey">
					<p>
						<input class="input" type="text" placeholder="Voornaam Achternaam">
					</p>

					<p>
						<input class="input w3-border-0" type="text" placeholder="Telefoonnummer">
					</p>

					<p>
						<input class="input w3-border-0" type="text" placeholder="E-mail adres">
					</p>
					<div id="cv">
						<p>Voeg hier je CV in:</p>
						<input type="file" id="myFile">
				</form>
				<script>
					function myFunction() {
						var x = document.getElementById("myFile");
						x.disabled = true;
					}
				</script>
				</div>

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