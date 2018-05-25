<?php


  require '/include/bootstrap.php';

  if (isset($_POST['forumPostSubmit'])) {

    $date = date("Y-m-d");
    $message = $_POST['message'];
    $topicID = $_POST['topicID'];
    $userID = $_SESSION['User'];

    $forum = new Forum();
    $forum->createForumPost($date, $message, $topicID, $userID);

    header("Location: forum.php");

  }
