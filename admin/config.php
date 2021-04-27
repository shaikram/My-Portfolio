
<?php
    include("mysqli/mysqli_connect.php");
    include("mysqli/login.session.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin | Shaikram Abdulguro Jr</title>
    <link rel="icon" href="../web_image/web_logo.png" type="image/gif" sizes="16x16"/>
    <link rel="stylesheet" href="../css/style.mobile.css" type="text/css">
    <link rel="stylesheet" href="../css/style.ipad.css" type="text/css">
    <link rel="stylesheet" href="../css/style.desktop.css" type="text/css">
    <link rel="stylesheet" href="css/style.mobile.css" type="text/css">
    <link rel="stylesheet" href="css/style.ipad.css" type="text/css">
    <link rel="stylesheet" href="css/style.desktop.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>

    <!-- Top Navigation Menu -->
    <?php require("require/mobile_nav1.php");?>
    <?php require("require/side_nav1.php");?>
    <?php require("require/message.req.php");?>


      <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
      <script type="text/javascript" src="js/mobile.bars.func.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
           //$('#inbox_div').onload(function(){
             $('#inbox_div').load('mysqli/inbox.load.php');
           //});

         });
      </script>

  </body>
</html>
