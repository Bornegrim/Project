<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Assets/css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="Assets/js/main.js"> </script>
  <title>Login</title>
</head>
<body>
  <div class=login_container>
    <div class="dark_container">
      <img src="Assets/img/Tvattbjornen_AB_wb.jpg" alt="Tvättbjörnen AB" class="login_img">
      <div class="center">
        <form class="center" action="login-process.php" method="post" id="loginForm">
          <p>Logga in</p>
          <input class="login_input" type="text" name="email" id="email" placeholder="Email">
          <input class="login_input" type="password" name="password" id="password" placeholder="Lösenord">
          <input class="blue_button" type="submit" name="login" id="login" value="Logga in">
          <p>Har du inte ett konto? </p>
          <a class="change_page" href="register.php">Skapa ett konto</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
