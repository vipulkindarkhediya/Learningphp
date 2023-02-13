<?php

echo "<h1>php array_key() & array_intersect()</h1>";

$emp = ["sagd", "sfad", "sahd", "sfad", "sadd", "sadq", "sads"];

$dd = array_keys($emp);

echo "<h3>array_key()</h3>";

foreach ($dd as $val) {
     echo $val . "<br>";
}


echo "<h1>php array_key() & array_intersect()</h1>";

$emp1 = ["sagd", "sfad", "sahd", "sfad", "sadd", "sadq", "sads"];
$emp2 = ["1", "sdds", "4", "5", "4", "sadq", "sads"];
$emp3 = ["2", "sfad", "5", "6", "4", "sadq", "sads"];
$emp4 = ["3", "sfad", "6", "6", "4", "sadq", "sads"];

$dd = array_intersect($emp1, $emp2, $emp3, $emp4);

echo "<h3>array_key()</h3>";

foreach ($dd as $val) {
     echo $val . "<br>";
}
