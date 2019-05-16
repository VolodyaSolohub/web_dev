<?php
if (count($_COOKIE) <= 0) {
  echo "Cookie isn't set";
}
else {
  $past = time() - 3600;
  foreach ($_COOKIE as $key => $value) {
    setcookie( $key, $value, $past, '/');
  }
  echo "All cookies were deleted.";
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Cookie delete</title>
   </head>
   <body>

   </body>
 </html>
