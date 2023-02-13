<?php

echo "<h1>php checkdate() & date_diff()</h1>";

echo "<h3>checkdate()</h3>";

$date = checkdate(13, 6, 2001);

if ($date) {
     echo "true";
} else {
     echo "false";
}


echo "<h3>date_diff()</h3>";

$date1 = date_create("2-7-2023");
$date2 = date_create("8-6-1983");

$date = date_diff($date1, $date2);

echo $date->y;

echo "<pre>";
print_r($date);
echo "</pre>";
