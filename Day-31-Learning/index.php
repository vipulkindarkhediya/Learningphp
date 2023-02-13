<?php

echo "<h1>multidimensional associative array</h1>";

$office = [
     "ab tech" => [
          "name" => "kucj",
          "salary" => 1000000,
          "contact" => 9098765432
     ],
     "lo tech" => [
          "name" => "lkssd",
          "salary" =>  10000,
          "contact" => 9998765432
     ],
     "po tech" => [
          "name" => "mark",
          "salary" =>  5000,
          "contact" => 9988765432
     ],
     "er tech" => [
          "name" => "jad",
          "salary" => 1000000,
          "contact" => 9098765432
     ],
     "ty tech" => [
          "name" => "g",
          "salary" =>  10000,
          "contact" => 9998765432
     ],
     "tb tech" => [
          "name" => "mklls",
          "salary" =>  5000,
          "contact" => 9988765432
     ]

];

echo "<table> 
          <tr>
               <th>CompanyName</th>
               <th>name</th>
               <th>salary</th>
               <th>contact</th>
          </tr>";
foreach ($office as $key => $value) {
     echo "<tr>
               <td>$key</td>";
          foreach ($value as $data) {
               echo "<td>$data</td>";
          }
     echo "</tr>";
}
echo "</table>";
