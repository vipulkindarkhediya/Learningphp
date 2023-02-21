<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>php cookie variable</title>
</head>

<body>
     <h1>php cookie variable</h1>
     <?php
     $user_name = "user";
     $user_value = "vipul Kindarkhediya";

     setcookie($user_name, $user_value, time() + (100 * 2), "/");


     if (!isset($_COOKIE[$user_name])) {
          # code...
          echo "not set";
     } else {
          # code...
          echo $_COOKIE[$user_name];
     }

     ?>


</body>

</html>