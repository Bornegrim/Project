<?php

session_start();

$uname = "Bornelu";
$pass = "Gitgud@@@123";
$host = "n3plcpnl0118.prod.ams3.secureserver.net";
$dbname = "Bornegrim";
$tbl_name = "User";

$connection = new mysqli($host, $uname, $pass, $dbname);

if ($connection->connect_error){
  die("Connection failed: ".$connection.connect_error);
}

if (isset($_POST['login'])) {
  $emaillogin = mysqli_real_escape_string($connection,$_POST['emaillogin']);
  $passwordlogin = mysqli_real_escape_string($connection,$_POST['passwordlogin']);

  $query = "SELECT Email, Password FROM User WHERE Email = '$emaillogin'";
  $login = mysqli_query($connection, $query);

  if (mysqli_num_rows($login) == 1) {
    $userdata = mysqli_fetch_array($login);
    $passwordDB = $userdata['Password'];
    if (password_verify($passwordlogin, $passwordDB)) {
      $_SESSION['Email'] = $_POST['emaillogin'];
      header("Location: index.php");
    }
    else {
      header("Location: login.php?loginfail=1");
      exit();
      }
    }
    else {
      header("Location: login.php?loginfail=1");
      exit();
      }

}


 ?>
