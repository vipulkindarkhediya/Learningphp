<?php

echo "<h1>php array_splice ()</h1>";

$emp = [
     "a" => 23,
     "b" => 34,
     "c" => 21,
     "d" => 78
];

$add_emp = [
     "a" => 26,
     "b" => 21
];


echo "<h3>before array_splice()</h3><pre>";
print_r($emp);
print_r($add_emp);
echo "</pre>";


array_splice($emp,0,2,$add_emp );


echo "<h3>after array_splice()</h3><pre>";
print_r($emp);
echo "</pre>";
