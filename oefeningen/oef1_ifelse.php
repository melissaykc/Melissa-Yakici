<?php
$byte= 5000000;
if ($byte >= 1000000000000)
{
  echo "tera";
} 
  
else if ($byte >= 1000000000)
{
  echo "giga";
} 

else if ($byte >= 1000000)
{
  echo "mega";
}

else if ($byte >= 1000)
{
  echo "kilo";
}

else
{
  echo "";
}
?>