<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
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
                      <input class="accept_terms" type="checkbox" onchange="checkedChanged(this)"> Jag godkänner <a href="terms_conditions.php">användarvillkoren</a><p></p>
                      <input class="gray_button" disabled="disabled" type="submit" name="reg" id="reg" value="Registrera Konto">
                      <p>Har du redan ett konto? </p>
                      <a class="change_page" href="login.php">Logga in på ditt konto</a>
                  </form>
              </div>
          </div>
      </div>
    <!--<div class="">
      <h1>Registration</h1>
      <p>Please enter your information</p>
    </div>
    <div class="">
      <form class="" action="register-process.php" method="post" >
        First Name : <br>
        <input type="text" name="firstName" id="firstName"><br>
        Last Name : <br>
        <input type="text" name="lastName" id="lastName"><br>
        Email : <br>
        <input type="text" name="email" id="email"><br>
        Password : <br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="reg" id="reg" value="submit">
      </form>
      <div class="">
        Already have an account: <button type="button" onclick="location.href='login.php'">Login Page</button>
      </div>
    </div>-->
  </body>
</html>
