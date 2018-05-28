<?php

if (isset($_POST['reg'])) {

  require 'include/bootstrap.php';

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $user = new User();
  $register = $user->register($firstName, $lastName, $password, $email);

  header("Location: login.php");
  exit();
} else {
  header("Location: ../register.php");
  exit();
}
