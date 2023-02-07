<?php

echo "<h1>php array_shift()  & array_unshift() </h1>";

echo "<h2>array_shift()</h2>";

$student = ["aasdas", 343434, "dsdsfsdf", 43344];

echo "<h3>Before array_shift </h3><pre>";
print_r($student);
echo "</pre>";

echo "<h3>After array_shift </h3><pre>";

array_shift($student);


echo "<pre>";
print_r($student);
echo "</pre>";


echo "<h2>array_unshift()</h2>";

$push_aa = ["aasdas", 343434, "dsdsfsdf", 43344];

echo "<h3>Before array_unshift() </h3><pre>";
print_r($push_aa);
echo "</pre>";

echo "<h3>After push </h3><pre>";

array_unshift($push_aa, "kamlesh", "sadad");

echo "<pre>";
print_r($push_aa);
echo "</pre>";
