<?php

require 'include/bootstrap.php';

$date = date("Y-m-d");
$message = $_POST['message'];
$topicID = $_POST['topicID'];

if (isset($_SESSION['User'])) {
  $userID = $_SESSION['User'];
}

$forum = new Forum();
$forum->createForumPost($date, $message, $topicID, $userID);
