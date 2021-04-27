
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <?php require("require/system.req.php");?>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
      <script src="http://malsup.github.com/jquery.form.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/mobile.bars.func.js"></script>
      <script type="text/javascript" src="js/ajax.upload.file.js"></script>
      <script type="text/javascript">

          function showDlg(){
            var tranxBox = document.getElementById('tranxBox');
            var dlgBox = document.getElementById('dlgBox');

            tranxBox.style.display = "block";
            dlgBox.style.display = "block";

          }
          function closeDlg(){
            var tranxBox = document.getElementById('tranxBox');
            var dlgBox = document.getElementById('dlgBox');

            tranxBox.style.display = "none";
            dlgBox.style.display = "none";
          }
      </script>


  </body>
</html>
