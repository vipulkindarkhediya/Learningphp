<?php

echo "<h1>Count() & Sizeof()</h1>";


$student = [
     "vipul" => ["aasdas", 343434, "dsdsfsdf", 43344],
     "ramesh" => ["aasdas", 343434, "dsdsfsdf", 43344, 3434],
     "asd" => ["aasdas", 343434, "dsdsfsdf", 43344],
     "sadasd" => ["aasdas", 343434, "dsdsfsdf", 43344]
];

echo count($student['ramesh']) ."<br>";
echo sizeof($student) ."<br>";
