<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Get sessoin vars</title>
  </head>
  <body>
    <?php
    echo "The first name is : " . $_SESSION["fname"] . "<br>";
    echo "And age : " . $_SESSION["age"] . "";
     ?>
  </body>
</html>
