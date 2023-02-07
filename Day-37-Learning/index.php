<?php

echo "<h1>php array_merge()  & array_combine() </h1>";

echo "<h2>array_merge()</h2>";

$student_merge_1 = ["aasdas", 343434];
$student_merge_2 = ["dsdsfsdf", 43344];
echo "<h3>Before array_merge() </h3><pre>";
print_r($student_merge_1);
print_r($student_merge_2);
echo "</pre>";

echo "<h3>After array_merge() </h3><pre>";

$merge = array_merge($student_merge_1, $student_merge_2);


echo "<pre>";
print_r($merge);
echo "</pre>";


echo "<h2>array_combine()</h2>";

$student_merge_1 = ["name", "age"];
$student_merge_2 = ["dsdsfsdf",    43344];
echo "<h3>Before array_combine() </h3><pre>";
print_r($student_merge_1);
print_r($student_merge_2);
echo "</pre>";

echo "<h3>After array_combine() </h3><pre>";

$combine = array_combine($student_merge_1, $student_merge_2);

echo "<pre>";
print_r($combine);
echo "</pre>";
