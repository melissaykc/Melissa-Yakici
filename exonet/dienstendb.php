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
			<a href="diensten.php">Diensten</a>
			<a href="home.php">Home</a>
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