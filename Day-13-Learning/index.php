<?php

echo "<h1>if elseif statement</h1>";

$a = 50;
$output = "";

if ($a == 10) {
     $output = "First condition is a == 10 : true";
} elseif ($a == 20) {
     $output = "second condition is a == 20 : true";
} elseif ($a == 30) {
     $output = "thard condition is a == 30 : true";
} else {
     $output = "First condition is a == not values : true";
}

echo $output;
