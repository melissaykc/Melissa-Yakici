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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div id="dienstendb">
		<?php
		for ($i = 0; $i < count($gefilterdeDiensten); $i++)
		{
			$DienstOnderdeel = $gefilterdeDiensten[$i];
		?>
		<div id="gefilterde-diensten">
			<h1>
			<?=$mijnFilter?>
		</h1>
		<hr>
		<h2>
			<?=$DienstOnderdeel["title"]?>
		</h2>
		<img src="images/<?= $DienstOnderdeel["image"]; ?>">
		<p>
			
			<?=$DienstOnderdeel["text"]?>
		</p>
		</div>
		<?php
		}
		?>
	</div>
	
</body>
</html>