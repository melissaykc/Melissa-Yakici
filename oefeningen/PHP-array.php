//oef4
<?php
$strings = array("item1", "item2", "item3", "item4", "item5", "item6", "item7", "item8", "item9","item10");
for ($i = 0; $i < count ($strings); ++$i)
{
  if ($i < 5)
  {
    echo $strings[$i];
    echo "<br>";
  }
}
?>


//oef5
<?php
$mijnInteger = array(1, 2, 3, 4, 5, 6, 7);
echo $mijnInteger[0];
echo "<br>";
echo $mijnInteger[count($mijnInteger)-1];
?>


//oef6
<?php
$gemetentemperaturen = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$gemiddelde = array_sum($gemetentemperaturen) / count($gemetentemperaturen);
echo "<br>";
echo $gemiddelde;
?>


//oef6
<?php
$gemetentemperaturen = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
for ($i = 0; $i < count ($gemetentemperaturen); ++$i)
{
  $som = $som + $gemetentemperaturen[$i];
}
$gemiddelde = $som / count($gemetentemperaturen);
echo "<br>";
echo $gemiddelde;
?>


//oef7
<?php
$gemetentemperaturen = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$hoogst = 0;
for ($i = 0; $i < count ($gemetentemperaturen); ++$i)
{  
  if ($gemetentemperaturen[$i] > $hoogst)
  {
    $hoogst = $gemetentemperaturen[$i];
  }
} 
echo "<br>";
echo $hoogst;
?>

//oef8
<?php
$gemetentemperaturen = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$count = 0;
for ($i = 0; $i < count($gemetentemperaturen); ++$i)
{
 if($gemetentemperaturen[$i] == 62)
 {
   $count = $count +1;
 }
}
echo "<br>";
echo $count;
?>