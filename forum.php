<?php
require 'include/bootstrap.php';

$session = $authorizer->sessionExist('Email');

if (!$session) {
  header('Location: login.php');
  exit();
}
include 'include/views/_header.php';
include 'include/views/forum-new.php';
include 'include/views/forum.php';
include 'include/views/_footer.php';
