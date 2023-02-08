<?php

echo "<h1>php timezone()</h1>";

echo "<h2>date_default_timezone_get()</h2>";
echo date_default_timezone_get(); //This machine default timezone get 

echo "<h2>date_default_timezone_set()</h2>";
date_default_timezone_set("Asia/Kolkata"); //This machine default timezone set 
echo date_default_timezone_get(); //This machine default timezone get


echo "<h2>timezone_open()</h2>";
$tx = timezone_open("Asia/Kolkata"); //This machine timezone_open set 

echo "<h2>timezone_name_get()</h2>";
echo timezone_name_get($tx); //This machine timezone_name_get


echo "<h2>timezone_location_get()</h2>";
print_r(timezone_location_get($tx)); //This machine timezone_location get

echo "<h2>timezone_identifiers_list()</h2>";
print_r(timezone_identifiers_list()); //This timezone_identifiers_list all world timezone get list
