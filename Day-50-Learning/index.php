<?php

echo "<h1>php strtotime() & strftime()</h1>";

echo "<h3>strtotime()</h3>";

echo date("d-m-Y", strtotime("next day"));


echo "<h3>strftime()</h3>";

echo strftime("%B %D %Y", mktime(02,02,2022));