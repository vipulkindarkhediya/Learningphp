<?php

echo "<h1>php date_parse() & date_parse_from_formate()</h1>";

echo "<h3>date_parse()</h3>";
$date = date('m/d/Y');

$da = date_parse($date);

echo "<pre>";
print_r($da);
echo "</pre>";


echo "<h3>date_parse_from_formate()</h3>";
$date_for = date('m/d/Y');

$da_for = date_parse_from_format("m/d/Y", $date_for);

echo "<pre>";
print_r($da_for);
echo "</pre>";
