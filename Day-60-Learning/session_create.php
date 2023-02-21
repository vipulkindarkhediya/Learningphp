<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
     <h1>php session variable</h1>
     <h2>Three steps to set & get session values</h2>
     <h3>Step 1:- session_start();</h3>
     <h3>Step 2:- $_SESSION[name]=value;</h3>
     <h3>Step 3:- echo $_SESSION[name];</h3>
     <h2>Delete session</h2>
     <h3>Step 1:- session_unset();</h3>
     <h3>Step 2:- session_destroy();</h3>

     <?php

     session_start();

     $_SESSION['user'] = "vip";

     $retun = "";

     $output = "";

     if (!$_SESSION['user'] == "") {
          echo 1;
     } else {
          echo 0;
     }


     if (isset($_SESSION['user'])) {
          $retun =  1;
     } else {
          $retun =  0;
     }

     if ($retun === 1) {
          # code...
          $output = 'Session successfully create <br><a href="session_view.php">session view</a>';
     } else {
          # code...
          $output = "Session not create";
     }

     echo "<h2>" . $output . "</h2>";

     ?>

     <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
     <script>
          $(document).ready(function() {
               $("body").css({
                    "fontFamily": "jetbrains mono"
               });
               $("meta:eq(-1)").html("<title>php session variable</title>");

          });
     </script>
</body>

</html>