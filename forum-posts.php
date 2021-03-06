<?php

require 'include/bootstrap.php';

$session = $authorizer->sessionExist('Email');

if (!$session) {
  header('Location: login.php');
  exit();
}

$topicName = $_POST['topicName'];
$topicID = $_POST['topicID'];

$forum = new Forum();
$allPosts = $forum->getAllForumPosts($topicID);

include 'include/views/_header.php';
include 'include/views/_forum-posts.php';
include 'include/views/_forum-posts-new.php';
include 'include/views/_footer.php';
