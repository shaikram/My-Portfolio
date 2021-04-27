

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log-in Page | Shaikram Abdulguro Jr</title>
    <link rel="icon" href="../web_image/web_logo.png" type="image/gif" sizes="16x16"/>
    <link rel="stylesheet" href="css/login/style.mobile.css" type="text/css">
    <link rel="stylesheet" href="css/login/style.ipad.css" type="text/css">
    <link rel="stylesheet" href="css/login/style.desktop.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="content">
      <center>
      <form class="login_form" action="mysqli/login.func.php" method="post">
        <img src="web_image/admin.png" width="100px" height="auto">
        <h2>Login to your account</h2>
        <input class="username" type="text" placeholder="Username" name="username" required>
        <input class="password" type="password" placeholder="Password" name="password" required>
        <input class="submit" type="submit" name="login" value="LOG IN">
      </form>
      </center>
    </div>

  </body>
</html>
