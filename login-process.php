<?php

require 'include/bootstrap.php';

if (isset($_POST['login'])) {
    $user = new User();

    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $user->getName('Email', $email, "User");
    $nameAdmin = $user->getName('Email', $email, "Admin");
    $UserID = $user->getUser($email, 'User');
    $UserIDadmin = $user->getUser($email, 'Admin');

    $login = $user->login($email, $password, 'User');
    $loginAdmin = $user->login($email, $password, 'Admin');

  if ($login) {
    $authorizer->set('Email', $email);
    $authorizer->set('Name', $name);
    $authorizer->set('User', $UserID);

    header("Location: index.php");
    exit();
  } else if ($loginAdmin) {
    $authorizer->set('Email', $email);
    $authorizer->set('Name', $nameAdmin);
    $authorizer->set('User', $UserIDadmin);
    $authorizer->set('Admin', $UserIDadmin);

    header("Location: index.php");
    exit();
  } else {
      header("Location: login.php?loginfail=1");
      exit();
      }
    } else {
  header("Location: ../login.php");
  exit();
}
