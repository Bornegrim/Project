<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/main.js"> </script>
    <title>Login</title>
  </head>
  <body>
      <div class=login_container>
          <div class="dark_container">
              <div class="name">
                  <h1>Login</h1>
                  <p>Please enter your information</p>
              </div>
              <div class="center">
                  <form class="center" action="login-process.php" method="post" id="loginForm">
                      <input class="login_input" type="text" name="email" id="email" placeholder="Email">
                      <input class="login_input" type="password" name="password" id="password" placeholder="Lösenord">
                      <input type="submit" name="login" id="login" value="Logga in">
                      <p>Har du inte ett konto? </p>
                      <a href="register.php">Skapa ett konto</a>
                  </form>
              </div>
              <div class="center">
                  
              </div>
          </div>
      </div>
  </body>
</html>
