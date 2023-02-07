<?php

echo "<h1>Break & continue statement</h1>";


for ($i = 0; $i <= 20; $i++) {
     if ($i == 10) {
          echo "This used continue statement other user show Not user show : " . $i . "<br>";
          continue;
     } elseif ($i == 15) {
          echo "This used break statement other user not show same user succefully : " . $i . "<br>";
          break;
     } else {
          echo "This continue statement : " . $i . "<br>";
     }
}
