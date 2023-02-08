<?php

echo "<h1>php getdate(), localtime() & gettimeofday()</h1>";


echo "<h3>getdate()</h3>";

echo "<pre>";
print_r(getdate());
echo "</pre>";

echo "<h3>localtime()</h3>";

echo "<pre>";
print_r(localtime(time(), true));
echo "</pre>";


echo "<h3>gettimeofday()</h3>";

echo "<pre>";
print_r(gettimeofday());
echo "</pre>";
