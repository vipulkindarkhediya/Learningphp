<?php

echo "<h1>Conditional Ternary operator</h1>";

$a = 10;

$output_first = $a === 10 ?  "true" : "false";

$output_second = "Value is : " .  ($a === 10 ?  "true" : "false");

echo $output_first . "<br>", $output_second;
