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
       echo "<img src='../uploads/".$name."'>";
       ?>
    
     </body>
   </html>