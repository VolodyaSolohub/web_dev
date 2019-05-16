<?php
$dirname = "uploads/";
$image = $_GET["img_name"];
echo basename($image);
?>

  <img src="../uploads/<?php  echo $image ?>.jpg">
