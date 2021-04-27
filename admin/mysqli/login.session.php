<?php

session_start();

 $user_check = $_SESSION['login_user'];

 $query = mysqli_query($conn,"SELECT * FROM admin_table WHERE username = '$user_check'");

 $row = mysqli_fetch_array($query,MYSQLI_ASSOC);

 $login_session = $row['username'];

 if(!isset($_SESSION['login_user'])){
    header("location:login.page.php");
    die();
 }
?>
