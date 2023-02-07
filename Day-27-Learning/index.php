<?php

echo "<h1>php global & local variable</h1>";

echo "<h3>Local variable</h3>";
function local_variable()
{
     $a = "local variable";
     echo "This variable is : " . $a . " use function inside  local variable & not use function outside";
}

local_variable();
echo "This variable is : " . $a;

echo "<h3>Global variable</h3>";

$a = " global variable";

function global_variable()
{
     echo "This global variable declar function outside direct not use in function inside " . $a . "<br> <br><br>";
}

global_variable();


function use_global_variable()
{
     global $a;
     
     echo "outside declar variable use function inside write <strong>global variablename</strong> " . $a;
}

use_global_variable();
