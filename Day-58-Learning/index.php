<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>php serve varible</title>
</head>

<body>
     <h1>php serve variable</h1>
     <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
          <input type="text" name="name" placeholder="Name">
          <br><br>
          <input type="number" name="age" placeholder="Age">
          <br><br>
          <input type="submit" name="submit">
     </form>
     <table>

          <th>
               <tr>
                    <th>Name</th>
                    <th>Age</th>
               </tr>
          </th>
          <tbody>
               <tr>
                    <?php
                    if (isset($_REQUEST['submit'])) {
                         echo "<td>" . $_REQUEST['name'] . "</td>
                         <br><br>
                         <td>" . $_REQUEST['age'] . "</td>";
                    }
                    ?>
               </tr>
          </tbody>
     </table>
     
</body>

</html>