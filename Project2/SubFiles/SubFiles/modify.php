<?php
  $cookie_name = "User";
  $cookie_value = $_POST["new_name"];
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Modify/Delete</title>
   </head>
   <body>
     <?php
      if (!isset($_COOKIE[$cookie_name])){
        echo "Cookie with name: " . $cookie_name . " wasn't set.";
      }
      else{
        echo "Cookie with name" . $cookie_name . "was set. And it's new value: ";
        echo $cookie_value;
      }
      ?>
   </body>
 </html>
