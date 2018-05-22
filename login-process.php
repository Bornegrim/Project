<?php

require 'include/bootstrap.php';

if (isset($_POST['login'])) {
    $user = new User();

    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $user->getName($email);
    
  $login = $user->login($email, $password);

  if ($login) {
    $authorizer->set('Email', $email);
    $authorizer->set('Name', $name);
      
    header("Location: index.php");
    } else {
      header("Location: login.php?loginfail=1");
      exit();
      }
    } else {
  header("Location: ../login.php");
  exit();
}
