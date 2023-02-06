<?php

echo "<h1>goto statement</h1>";

for ($a = 1; $a <= 10; $a++) {
     if ($a > 8) {
          goto vip;
     }

     echo $a . "<br>";
}

echo "Hello goto <br>";

vip:

echo "Run goto statement <br>";
