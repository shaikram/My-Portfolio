
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
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/hover.func.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <style media="screen">
    body{
      background: #000;
    }
  </style>
  <body>

    <!-- Top Navigation Menu -->
    <?php require("require/mobile_nav.php");?>
    <?php require("require/side_nav.php");?>
    <?php require("require/home.req.php");?>
    <?php require("require/profile.req.php");?>
    <?php require("require/skill.req.php");?>
    <?php require("require/work.req.php");?>
    <?php require("require/contact.req.php");?>
    <?php require("require/footer.req.php");?>


      <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
      <script type="text/javascript" src="js/mobile.bars.func.js"></script>
      <script type="text/javascript" src="js/myapp.js"></script>
      <script type="text/javascript" src="js/scrolldown.js"></script>
      <script type="text/javascript" src="js/portfolios.js"></script>
      <script type="text/javascript" src="js/workl.function.js"></script>
      <script type="text/javascript" src="js/ajax.dataposts.js"></script>
      <script type="text/javascript">
      $(document).ready(function(){
        var dwn_fnc = document.getElementById('dwn_fnc');
        var hd_arr = document.getElementById('hd_arr').value;
        dwn_fnc.addEventListener("click", function(){
          $("html, body").animate({
            scrollTop:$("#scroll-" + hd_arr).offset().top + 10
          },1000);


        });

        var up_fnc = document.getElementById('up_fnc');
        var hd_arrup = document.getElementById('hd_arrup').value;
        up_fnc.addEventListener("click", function(){
          $("html, body").animate({
            scrollTop:$("#scroll-" + hd_arrup).offset().top + 10
          },1000);


        });

      });
      </script>


  </body>
</html>
