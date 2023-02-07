<?php

echo "<h1>php array slice function</h1>";


$emp = [
     "vipul1", "asdas2", "sadsad3"
];

$dd = array_slice($emp, 1);

echo "<h3>aray_slice() before</h3><pre>";
print_r($emp);
echo "</pre>";

echo "<h3>aray_slice() after</h3>";

foreach ($dd as $data) {

     echo $data . ",  ";
}
