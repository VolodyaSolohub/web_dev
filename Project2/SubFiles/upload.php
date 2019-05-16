<!-- <?php
$target_dir = "uploads/";
$fileName = $_FILES["img"]["name"];
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        move_uploaded_file($fileName, $target_file);
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    echo "Your file was successfully uploaded.";
}
?> -->



<!-- <?php
if(isset($_GET['submit'])){
  $file = $_POST['file'];
  print_r($file);
  $fileName = $_POST['file']['name'];
  $fileTmpName = $_POST['file']['tmp_name'];
  $fileError = $_POST['file']['error'];
  $fileSize = $_POST['file']['size'];
  $fileType = $_POST['file']['type'];

  $fileExp = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExp));

  $allowed =  array('jpg', 'jpeg', 'png');
}
  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 1000000) {
        $fileNameNew = uniqid('', true).".".$fileActualExt;
        $fileDestination = 'uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        header("Location: index.php?uploadsuccess");
      }else {
        echo "Your file is too big";
      }
    }
    else {
      echo "There was error while uploading";
    }
  }
  else {
    echo "You cannot upload files of this type";
  }
   ?> -->



   <!DOCTYPE html>
   <html lang="en" dir="ltr">
     <head>
       <meta charset="utf-8">
       <title></title>
     </head>
     <body>
       <?php
        if(isset($_POST['submit'])){
           $name       = $_FILES['img']['name'];
           $temp_name  = $_FILES['img']['tmp_name'];
           if(isset($name)){
               if(!empty($name)){
                   $location = '../uploads/';
                   echo "Your file name: <br/>";
                   echo "$name<br/>";
                   if(move_uploaded_file($temp_name, $location.$name)){
                       echo 'File uploaded successfully';
                   }
               }
           }  else {
               echo 'You should select a file to upload !!';
           }
       }
       ?>
       <form  action="show.php" method="get">
         <input type="text" name="img_name" value="$name">
         <input type="submit" name="show" value="show">
       </form>
     </body>
   </html>

























<!-- <?php
$upload_dir="../uploads";
$target_file="";
$tmp_file="";
if(isset($_POST['submit']))
{

        $tmp_file=$_FILES['file']['tmp_name'];
        $target_file=basename($_FILES['file']['name']);
            if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file))
        {
        echo "File uploaded <br />";

        }
        else {
              echo "Something went Wrong !!<br/>";
            }
} ?>
