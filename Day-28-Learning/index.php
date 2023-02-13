<?php

echo "<h1>php array</h1>";

$color = ["Vipul", "Kamlesh", "rakesh", "ranjit","sasd"];

echo $color[0] . "<br>", $color[1] . "<br>", $color[2] . "<br>", $color[3] . "<br>";

echo "<pre>";
print_r($color);
echo "</pre>";

foreach ($color as $data) {
     echo $data . "<br>";
}
