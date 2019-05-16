<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modify session</title>
  </head>
  <body>
    <?php
      $new_name = $_POST["new_var"];
      $new_age = $_POST["new_age"];
      $_SESSION["fname"] = $new_name;
      $_SESSION["age"] = $new_age;
      echo "New vars were created.<br>";
      echo "You can check them in GET section";
     ?>
  </body>
</html>
