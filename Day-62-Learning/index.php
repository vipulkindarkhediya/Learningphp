<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>php die and exit function</title>
</head>

<body>
     <h1>php die() & exit()</h1>
     <?php
     $num = ["vipul", "sipul", "dipul", "gipul", "yipul", "iipul", "oipul", "lipul",];

     foreach ($num as $item) {

          if ($item == "oiipul") {
               echo exit("oiipul") . "<br>";
          } else if ($item == "iipul") {
               echo die("iipul") . "<br>";
          } else {
               echo $item . "<br>";
          }
     }
     ?>
</body>

</html>