<?php

echo "<h1>php function paramaters</h1>";

/*
function functionName(parameter1, parameter2)
{
     statement
}

functionName(argument1, argument2);

*/



function addition($a, $b) // this function perameter pass
{
     return "This two values is addition : " . $a + $b . "<br>";
}

function substraction($a, $b)
{
     return "This two values is substraction : " . $a - $b . "<br>";
}


echo  addition(20, 30);

echo substraction(20, 10);
