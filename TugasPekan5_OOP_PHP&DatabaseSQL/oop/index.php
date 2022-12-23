<?php

require('animal.php');
require('ape.php');
require('frog.php');

$sheep = new Animal("shaun");

echo "Nama : $sheep->name <br>"; // "shaun"
echo "legs : $sheep->legs <br>"; // 4
echo "cold blooded : $sheep->cold_blooded <br><br>"; // false

$kodok = new Frog("buduk");

echo "Nama : $kodok->name <br>"; // "kera sakti"
echo "legs : $kodok->legs <br>"; // 4
echo "cold blooded : $kodok->cold_blooded <br>"; // false
echo $kodok->jump();

echo "<br><br>";

$sungokong = new Ape("kera sakti");

echo "Nama : $sungokong->name <br>"; // "kera sakti"
echo "legs : $sungokong->legs <br>"; // 2
echo "cold blooded : $sungokong->cold_blooded <br>"; // false
$sungokong->yell();
