<?php

echo "<h1>associative array</h1>";

$detail = [
     "name" => "Vipul",
     "age" => 22,
     "contact" => 9979220622,
];

echo $detail['name'] . "<br>" . $detail['age'];

echo "<pre>";
print_r($detail);
echo "</pre>";

foreach ($detail as $person) {
     echo $person . "<br>";
}
