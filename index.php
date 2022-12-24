<?php

require ('animal.php');
require ('Frog.php');
require ('Ape.php');
$sheep = new Animal("shaun");

echo "Name : " . $sheep->name . "<br>"; // "shaun"
echo "Leg : " .  $sheep->legs . "<br>"; // 2
echo "Cold BLood : " . $sheep->cold_blooded . "<br><br>"; // false

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name . "<br>"; // "shaun"
echo "Leg : " .  $sungokong->legs . "<br>"; // 2
echo "Cold BLood : " . $sungokong->cold_blooded . "<br>"; // false
echo "Yell : ";
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");


echo "Name : " . $kodok->name . "<br>"; // "shaun"
echo "Leg : " .  $kodok->legs . "<br>"; // 2
echo "Cold BLood : " . $kodok->cold_blooded . "<br>"; // false
echo "Jump : ";
$kodok->jump() ; // "hop hop"


?>
 