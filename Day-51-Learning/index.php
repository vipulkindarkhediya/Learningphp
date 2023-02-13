<?php

echo "<h1>php date_time_set()</h1>";

$date = date_create("2022-12-23");

date_time_set($date, 13, 20);

echo date_format($date, "d/m/Y H:i A");
