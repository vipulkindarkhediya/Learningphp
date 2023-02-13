<?php

echo "<h1>Switch case statement</h1>";

$num = 30;
$output = "";

switch ($num) {
     case 10:
          if ($num === 10) {
               $output = "This number is integer data types and same value :" . $num;
          } else {

               $output = "This number is not integer data types and same value :" . $num;
          }
          break;
     case 20:
          if ($num === 20) {
               $output = "This number is integer data types and same value :" . $num;
          } else {

               $output = "This number is not integer data types and same value :" . $num;
          }
          break;
     case 30:
          if ($num === 30) {
               $output = "This number is integer data types and same value :" . $num;
          } else {

               $output = "This number is not integer data types and same value :" . $num;
          }
          break;
     default:
          if ($num === 40) {
               $output = "This number is  integer data types and not same value :" . $num;
          } else {
               $output = "This number is not integer data types and not same value :" . $num;
          }
}


echo $output;
