<?php

echo "<h1>while loop </h1>";


$array = ["vipul", "kamles", "ssd", "ssd", "ssd", "ssd", "ssd", "ssd", "ssd", "ssd", "ssd"];

$arrayLength = count($array);

$index = 0;


while ($index < $arrayLength) {
     echo $index . ") " . $array[$index] . "<br>";

     $index++;
}
