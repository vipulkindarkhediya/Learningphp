<?php

echo "<h1>do while loop</h1>";


$a = ["kamle", "kamlse", "kamqle", "kamgle", "kamele", "kawmle", "kamlve", "kamle"];

$al = count($a);

$in = 0;

do {
     echo $in . ") " . $a[$in] . "<br>";
     $in++;
} while ($in < $al);
