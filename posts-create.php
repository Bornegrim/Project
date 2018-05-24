<?php

require 'include/bootstrap.php';

if (isset($_POST['submit'])) {
    $post = new Post();
    $user = new User();


    $message = $_POST['message'];
    $email = $authorizer->get('Email');

    if (isset($_SESSION['Admin'])) {
      $userID = $user-> getUser($email, 'Admin');
      $post-> createPost($message, $userID);
    }


}

header("Location: index.php");
exit();
