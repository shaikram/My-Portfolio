
<?php
    include("mysqli/mysqli_connect.php");
    include("mysqli/login.session.php");
    if(isset($_GET['msg_id'])){
      $msg_id = $_GET['msg_id'];
      $query = "SELECT * FROM message_table WHERE Msg_id = $msg_id";
      $query2 = "UPDATE message_table SET status = 0 WHERE Msg_id = $msg_id";
      $res = mysqli_query($conn,$query);
      mysqli_query($conn,$query2);



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
  <style media="screen">
    body{
      background: #dbdbdb;
    }
  </style>
  <body>

    <!-- Top Navigation Menu -->
    <?php require("require/mobile_nav1.php");?>
    <?php require("require/side_nav1.php");?>
    <center>
    <div class="read_msg_div">
      <div class="my_msg_div">
        <?php
        if(mysqli_num_rows($res) > 0){
          while($rows = mysqli_fetch_assoc($res)){
            echo "<h1>".ucwords($rows['Email_name'])."</h1>";
            echo "<span>".$rows['Email']."</span><br>";
            echo "<p>".$rows['Email_text']."</p>";
          }
        }
        ?>
      </div>
    </div>
    </center>



      <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
      <script type="text/javascript" src="js/mobile.bars.func.js"></script>

  </body>
</html>
<?php
}else{
  header("inbox.load.php");
}


?>
