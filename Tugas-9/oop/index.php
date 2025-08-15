<?php
require_once("Animal.php");
require_once("Frog.php");
require_once("Ape.php");

$sheep = new Animal("shaun");
echo "Name: " .$sheep->name ."<br>"; // "shaun"
echo "legs: " .$sheep->legs ."<br>"; // 4
echo "cold bloded: " .$sheep->cold_blooded ."<br> <br>"; // "no"

$kodok = new Frog("buduk");
echo "Name: " .$kodok->name ."<br>"; // "shaun"
echo "legs: " .$kodok->legs ."<br>"; // 4
echo "cold bloded: " .$kodok->cold_blooded ."<br>";
echo $kodok->jump();

$sungokong = new Ape("kera sakti");
echo "Name: " .$sungokong->name ."<br>"; // "shaun"
echo "legs: " .$sungokong->legs ."<br>"; // 4
echo "cold bloded: " .$sungokong->cold_blooded ."<br>";
echo $sungokong->yell();
?>