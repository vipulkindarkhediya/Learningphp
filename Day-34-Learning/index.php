<?php

echo "<h1>php array_replace() & array_replace_recurvise</h1>";

$office = [
     "kamles",
     "safat",
     "sdasd",
     "asdsad",
     "adasdasd",
     "adasds"
];

$office_2 = [1, 2, 3];

$output = array_replace($office, $office_2);

echo "<h3>array_replace</h3>";

foreach ($output as $key => $value) {
     echo $key . "=>" . $value . "<br>";
}


$output = array_replace_recursive($office, $office_2);

echo "<h3>array_replace_recursive</h3>";

foreach ($output as $key => $value) {
     echo $key . "=>" . $value . "<br>";
}
