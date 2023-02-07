<?php

echo "<h1>functions arguments by reference</h1>";

function details(&$name, &$age, &$number)
{
     $name .= " Name is : <br>";
     $age .= " Age is : <br>";
     $number .= " Contact number : <br>";

     return $name . $age . $number;
}

$name = "vipul";  //refernce
$age = 23; //refernce
$number = 9879664050; //refernce

echo  details($name, $age, $number); //argumenet

// echo $vip;
