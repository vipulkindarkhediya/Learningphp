<?php

echo "<h1>Logical Operator</h1>";

$a = 10;

$b = 10;

if ($a == 10 && $b == 10) {
     echo "This use && / and operators a == 10 and b == 10 : true <br>";
} else {
     echo "This use && / and operators a == 10 and b == 20 : false <br>";
}

$c = 10;

$d = 10;

if ($c == 10 || $d == 10) {
     echo "This use || / or operators c == 10 and d == 10 : true <br>";
} else {
     echo "This use || / or operators c == 10 and d == 20 : false <br>";
}

$e = 10;

$f = 10;

if ($e != 20  &&  $f != 30) {
     echo "This use ! operators e != 10 and f != 10 : true <br>";
} else {
     echo "This use ! operators e != 10 and f != 20 : false <br>";
}
