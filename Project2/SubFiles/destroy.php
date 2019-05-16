<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Destroy session</title>
  </head>
  <body>
    <?php
      session_unset();
      session_destroy();
      echo "The session was destroyed";
     ?>
  </body>
</html>
