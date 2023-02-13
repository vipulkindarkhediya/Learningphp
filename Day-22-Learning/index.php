<?php

echo "<h1>php function with paramaters</h1>";

/*
function functionName(parameter1, parameter2)
{
     statement
}

functionName(argument1, argument2);

*/



function addition($a, $b) // this function perameter pass
{
     echo "This two values is addition : " . $a + $b . "<br>";
}

function substraction($a, $b)
{
     echo "This two values is substraction : " . $a - $b . "<br>";
}


addition(20, 30);

substraction(20, 10);
