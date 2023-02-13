<?php

echo "<h1>php date_create() & date_formate()</h1>";

echo "<h3>date_create()</h3>";

$date = date_create("2024-6-02 22:16:30", timezone_open("Asia/kolkata"));


echo "<h3>date_formate()</h3>";
echo date_format($date, "d/m/Y H:i:sa");
