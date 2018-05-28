<?php

require 'include/bootstrap.php';

$post = new Post();
$user = new User();

$message = $_POST['message'];
$email = $authorizer->get('Email');

if (isset($_SESSION['Admin'])) {
  $userID = $user->getUser($email, 'Admin');
  $post->createPost($message, $userID);
}
