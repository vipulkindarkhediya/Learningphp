<?php

echo "<h1>variable function</h1>";

$details = function ($name, $age) {
     $name = "Hello : " . $name . "<br>";
     $age = "Age : " . $age . "<br>";

     return $name . $age;
};

echo $details("Vipul", 23);
