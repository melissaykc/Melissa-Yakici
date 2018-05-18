<?php
$basisgetal= 2;
$macht= 3;
$uitkomst= $basisgetal;
for ($i = 0; $i < $macht - 1; ++$i)
{
$uitkomst= $uitkomst * $basisgetal;
echo $uitkomst;
}

?>