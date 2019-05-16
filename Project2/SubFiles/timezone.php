<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Timezone</title>
  </head>
  <body>
    <?php
      date_default_timezone_set("Europe/Kiev");
      echo "The time is " . date("h:i:sa");
     ?>
  </body>
</html>
