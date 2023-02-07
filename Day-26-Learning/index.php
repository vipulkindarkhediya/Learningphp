<?php

echo "<h1>Recursive function</h1>";

function disply($num)
{
     if ($num <= 5) {
          echo $num . "<br>";
          disply($num + 1);
     }
}

echo disply(1);
