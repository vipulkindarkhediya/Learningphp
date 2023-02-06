<?php

echo "<h1>Nested loop</h1>";

for ($num = 1; $num <= 5; $num++) {
     echo "<strong>Group number : </strong> " . $num . "<br>";
     for ($n = 1; $n <= 5; $n++) {
          echo "Name : " . $n . "<br>";
     }
}
