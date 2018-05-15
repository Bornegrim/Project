<!DOCTYPE html>
<html
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <div class="">
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
    </div>
  </body>
</html>
