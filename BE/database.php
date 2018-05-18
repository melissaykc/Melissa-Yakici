<?php

$products = array(
  array  ("title" => "Bert", "image" => "be.jpeg", "text" => "Dit is het BERT product", "prijs" => 15.5),
  array  ("title" => "Ernie", "image" => "ernie.png", "text" => "Dit is het ERNIE product", "prijs" => 15),
  array  ("title" => "Bernie", "image" => "bernie.jpg", "text" => "Dit is het BERNIE SANDERS product", "prijs" => 50000),
  array  ("title" => "Rick", "image" => "rickandmorty.jpg", "text" => "Dit is het RICK product", "prijs" => 15)
);

echo $products[2]["title"];

?>