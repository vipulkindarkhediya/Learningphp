<?php

echo "<h1>php mktime() & gmmktime()</h1>";

echo "<h3>mktime()</h3>";

echo "Date & Time :" . date('d-m-y h:i:sa') . "<br><br>";

echo "mktime : " . date("d-m-y h:i:sa", mktime(0, 0, 0, 12, 02, 2022))  . "<br><br>";

echo "gmmktime : " . date("d-m-y h:i:sa", gmmktime(0, 0, 0, 12, 02, 2022));
