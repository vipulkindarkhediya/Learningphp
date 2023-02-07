<?php

echo "<h1>function with return value</h1>";

function student($name, $age, $contact)
{
     return "Name is : " . $name . "<br>" . "Age is : " . $age . "<br> " . "Contact is : " . $contact . "<br><br>";
}

echo student("vipul", 23, 9879663850);
echo student("Sagar",12,3456789012);
echo student("Vipul",20,3456789012);