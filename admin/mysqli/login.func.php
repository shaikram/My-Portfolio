<?php
   include("mysqli_connect.php");
   session_start();

   if(isset($_POST['login'])){
     $username = mysqli_real_escape_string($conn,stripslashes(htmlentities($_POST['username'])));
     $password = mysqli_real_escape_string($conn,stripslashes(htmlentities(md5($_POST['password']))));

     $query = mysqli_query($conn,"SELECT * FROM admin_table WHERE username = '$username' AND password = '$password' ");
     if(mysqli_num_rows($query) == 1){
       //session_register("username");
       $_SESSION['login_user'] = $username;
       header("location: ../");
     }else{
       header("location: login.page.php?message=error");
     }


   }

?>
