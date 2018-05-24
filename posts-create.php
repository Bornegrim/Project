<?php

require 'include/bootstrap.php';

if (isset($_POST['submit'])) {
    $post = new Post();
    $user = new User();


    $message = $_POST['message'];
    $email = $authorizer->get('Email');
    $userID = $user-> getUser($email, 'User');
    $post-> createPost($message, $userID);
}

header("Location: index.php");
exit();
