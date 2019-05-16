<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Timestamp</title>
  </head>
  <body>
    <?php
    $date = date_create();
    echo date_timestamp_get($date);
     ?>
  </body>
</html>
