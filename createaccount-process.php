<?php
$uname = "Bornelu";
$pass = "Gitgud@@@123";
$host = "n3plcpnl0118.prod.ams3.secureserver.net";
$dbname = "Bornegrim";
$tbl_name = "User";

$connection = new mysqli($host, $uname, $pass, $dbname);

if ($connection->connect_error){
  die("Connection failed: ".$connection.connect_error);
}

$emailreg = $passwordreg = "";



function test_email($data) {
  $atpos = strpos($data, "@");
  $dotpos = strripos($data, ".");
  if ($atpos === false || $dotpos === false) {
    return false;
  } else {
      if ($atpos<1 || $dotpos<($atpos+2) || $dotpos+2>=($data.length)) {
        return true;
      } else {
        return false;
    }
  }
}

if (isset($_POST['reg'])) {
  $firstnamereg = mysqli_real_escape_string($connection, $_POST['firstnamereg']);
  $lastnamereg = mysqli_real_escape_string($connection, $_POST['lastnamereg']);
  $passwordreg = mysqli_real_escape_string($connection, $_POST['passwordreg']);
  $emailreg = mysqli_real_escape_string($connection, $_POST['emailreg']);



  $query = "SELECT Email FROM User WHERE Email = '$emailreg'";
  $user = mysqli_query($connection, $query);

  if (mysqli_num_rows($user) > 0) {

    header("Location: createaccount.php?createaccountfail=1");
    exit();

  } else {

    if (!test_email($emailreg)) {
          $emailreg = "";
      }

    if (!Empty($emailreg) && !Empty($passwordreg) && !Empty($firstnamereg)) {
      $passwordhashed = password_hash($passwordreg, PASSWORD_DEFAULT);
      $query = "INSERT INTO $tbl_name(FirstName, LastName, Password, Email, AccountType)VALUES('$firstnamereg', '$lastnamereg', '$passwordhashed', '$emailreg', 'DEFAULT')";
      $result = mysqli_query($connection, $query);
    }
  }
  }



header("Location: index.php");
exit();
 ?>
