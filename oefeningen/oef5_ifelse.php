<?php
$getal= 500;
if($getal % 400)
{
  echo "wel schrikkeljaar";
}

else if ($getal % 100)
{
  echo "niet schrikkeljaar";
}

else if ($getal % 4)
{
  echo "wel schrikkeljaar";
}

else 
{
  echo "niet schrikkeljaar";
}
?>