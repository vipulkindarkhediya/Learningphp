<?php

echo "<h1>multidimensional array</h1>";

$details = [
     ["vipul", 23, 9879663850],
     ["Sagar", 54, 9409089890],
     ["Dharmesh", 23, 9000080808]
];


echo "<pre>";
print_r($details);
echo "</pre>";

foreach ($details as $data) {
     foreach ($data as $da) {
          echo $da . " "; 
     }
     echo "<br>";
}