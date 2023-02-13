<?php


echo "<h1>php in_array() & array_search()</h1>";

$student = ["vipyl", "vipysl", "vipyfl", "vipeyl", "vipyfl", "vipfydl", "svipyl"];


if (in_array("vipyl", $student)) {
     $in_dis = 1;
} else {
     $in_dis = 0;
}

echo $in_dis . "<br><br>";

if (array_search("vipyfl", $student)) {
     $dis = 1;
} else {
     $dis = 0;
}

if ($dis === 1) {
     $su = 1;
} else {
     $su = 0;
}

echo $su;
