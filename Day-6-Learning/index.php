<?php

$a = 50;
$b = 10;
$addition = $a + $b;
$subtraction = $a - $b;
$multiplication = $a * $b;
$division = $a / $b;
$exponentiation = $a ** $b;

$c = 33;
$d = 2;
$modolus = $c % $d;


$increment = 20;
$increment++;

$decrement = 20;
$decrement--;

echo "<h1>Arithmetic Operator</h1>";

echo "This is a addition (+) two values : " . $addition . "<br>";

echo "This is a subtraction (-) two values  : " . $subtraction . "<br>";

echo "This is a multiplication (*) two values  : " . $multiplication . "<br>";

echo "This is a divison (/) two values  : " . $division . "<br>";

echo "This is a modolus (%) two values  : " . $modolus . "<br>";

echo "This is a exponentiation (**) two values  : " . $exponentiation . "<br>";

echo "This is a increment operator (+ +) two values  : " . $increment . "<br>";

echo "This is a decrement operator ( - - ) two values  : " . $decrement . "<br>";
