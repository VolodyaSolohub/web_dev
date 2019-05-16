<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Enabled/Disabled</title>
  </head>
  <body>
    <?php
    if(count($_COOKIE) > 0) {
      echo "Cookies are enabled.";
    } else {
      echo "Cookies are disabled.";
    }
     ?>
  </body>
</html>
