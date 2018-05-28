<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="Assets/css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="Assets/js/main.js"></script>
  <meta charset="utf-8">
  <title>Registration</title>
</head>
<body>
  <div class=login_container>
    <div class="dark_container">
      <img src="Assets/img/Tvattbjornen_AB_wb.jpg" alt="Tvättbjörnen AB" class="register_img">
      <div class="center">
        <form class="center" action="register-process.php" method="post" id="loginForm">
          <p>Registrera konto</p>
          <input class="login_input" type="text" name="firstName" id="firstName" placeholder="Förnamn">
          <input class="login_input" type="text" name="lastName" id="lastName" placeholder="Efternamn">
          <input class="login_input" type="text" name="email" id="email" placeholder="Email">
          <input class="login_input" type="password" name="password" id="password" placeholder="Lösenord">
          <input class="accept_terms" type="checkbox" onchange="checkedChanged(this)"> Jag godkänner <a href="terms_conditions.php">användarvillkoren</a>
          <input class="gray_button" type="submit" name="reg" id="reg" value="Registrera Konto">
          <p>Har du redan ett konto? </p>
          <a class="change_page" href="login.php">Logga in på ditt konto</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
