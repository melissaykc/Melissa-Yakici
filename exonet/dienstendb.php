<?php
include_once("database.php");
$mijnFilter = $_GET["filter"];
$gefilterdeDiensten = array();
for ($i =0; $i < count($diensten); ++$i)
{
	$dienst = $diensten[$i];
	$typeDienst = $dienst["typeProduct"];
	for ($j =0; $j < count($typeDienst); ++$j)
	{
		$dienstNaam = $typeDienst[$j];
		if($dienstNaam == $mijnFilter)
		{
		array_push($gefilterdeDiensten, $dienst);
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/menu.css">
	<link rel="stylesheet" type="text/css" href="styles/dienstendb-grid.css">
	<link rel="stylesheet" type="text/css" href="styles/dienstendb.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>diensten</title>
</head>
<body>
	<div id="dienstendb-grid">
		<div id="hamburger">
			<a href="#menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
		</div>
		
		<div id="menu">
			<img src="images/logo.jpg">
			<a href="jobs.php">Jobs</a>
			<a href="contact.php">Contact</a>
			<div class="dropdown">
				<a class="diensten-link" href="diensten.php">Diensten</a>
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
		
		<div id="dienstendb">
			<?php
				for ($i = 0; $i < count($gefilterdeDiensten); $i++)
				{
					$DienstOnderdeel = $gefilterdeDiensten[$i];
			?>
			<div id="gefilterde-diensten">
				<h2>
					<?=$DienstOnderdeel["title"]?>
				</h2>
				<hr>
				<p>
					<?=$DienstOnderdeel["text"]?>
				</p>
				<img src="images/<?= $DienstOnderdeel["image"]; ?>">
			</div>
			
			<?php
				}
			?>
			
			
		</div>
		
		<div id="footer">
			2018 © Copyright EXONET Belgium.
		</div>
	</div>
</body>
</html>