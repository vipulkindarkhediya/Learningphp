<?php

$title = "<h1>php date_add(), date_sub() & date_modify()</h1>";

echo $title;
$date = date_create('2023-02-08 22:50:30', timezone_open('Asia/Kolkata'));


$date_formate = date_format($date, 'd/m/Y H:i:sa');


echo "<br> <h3>current date</h3>";
echo $date_formate;
echo "<br> <h3>date_add(+)</h3>";

date_add($date, date_interval_create_from_date_string("20 days"));

$date_formate = date_format($date, 'd/m/Y H:i:sa');

echo $date_formate;

echo "<br> <h3>date_sub(-)</h3>";

$datesub = date_create('2023-02-08 22:50:30', timezone_open('Asia/Kolkata'));

date_sub($datesub, date_interval_create_from_date_string("20 days"));

$date_formate = date_format($datesub, 'd/m/Y H:i:sa');

echo $date_formate;


echo "<br> <h3>date_modify(+,-)</h3>";

$datemod = date_create('2023-02-08 22:50:30', timezone_open('Asia/Kolkata'));

date_modify($datemod, "02 Days");

$date_formate = date_format($datemod, 'd/m/Y H:i:sa');

echo $date_formate;
