<?php

echo "<h1>php diff() & udiff()</h1>";


$emp1 = [
     "sdasdsa",
     "wewee",
     "wewewe"
];

$emp = [
     "sdasdsa",
     "wewee",
     "aswewewe"
];

$da = array_diff($emp1, $emp);

echo "<h3>array_diff()</h3>";

foreach ($da as $va) {
     echo $va . "<br>";
}


$em1 = [
     "sd",
     "as",
     "wewewe"
];

$em = [
     "sd",
     "as",
     
     
];

function myfunction($em1, $em)
{
     if ($em1 === $em) {
          return 1;
     } else {
          return ($em1 > $em) ? 1 : -1;
     }
}

echo "<h3>array_duiff()</h3>";

$das = array_udiff($em1, $em, "myfunction");


foreach ($das as $va) {
     echo $va . "<br>";
}
