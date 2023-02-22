<?php

if ($_REQUEST['save']) {

     if (move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name'])) {
          echo "Successfully upload file <br>";
          echo $_REQUEST['name'] . "<br>";
          echo $_REQUEST['age'] . "<br>";
     } else {
          echo "Could not upload the file.";
     }
} else {
     echo "Dont send data";
}
