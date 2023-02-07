<?php

echo "<h1>php array_pop()  & array_push() </h1>";

echo "<h2>array_pop()</h2>";

$student = ["aasdas", 343434, "dsdsfsdf", 43344];

echo "<h3>Before array_pop </h3><pre>";
print_r($student);
echo "</pre>";

echo "<h3>After array_pop </h3><pre>";

array_pop($student);


echo "<pre>";
print_r($student);
echo "</pre>";


echo "<h2>array_push()</h2>";

$push_aa = ["aasdas", 343434, "dsdsfsdf", 43344];

echo "<h3>Before array_push() </h3><pre>";
print_r($push_aa);
echo "</pre>";

echo "<h3>After push </h3><pre>";

array_push($push_aa, "kamlesh", "sadad");

echo "<pre>";
print_r($push_aa);
echo "</pre>";
