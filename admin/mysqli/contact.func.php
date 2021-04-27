<?php
    include("mysqli_connect.php");

    if(isset($_POST['cont_done'])){
      $username = mysqli_real_escape_string($conn,stripslashes(htmlentities($_POST['username'])));
      $email = mysqli_real_escape_string($conn,stripslashes(htmlentities($_POST['email'])));
      $text = mysqli_real_escape_string($conn,stripslashes(htmlentities($_POST['text'])));
      $status = 1;

      $sql = ("INSERT INTO message_table(Email_name, Email, Email_text, Status) VALUES('$username','$email','$text','$status')");

         if(mysqli_query($conn,$sql)){
           echo $username." ".$email." ".$text;
         }else{
           echo "Putang ina";
         }
    }else{
      echo "There's a problem";
    }
?>
