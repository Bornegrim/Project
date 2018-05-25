<?php

  require 'include/bootstrap.php';
  if (isset($_POST['forumSubmit'])) {
    $topicName = $_POST['forumTopic'];

    $forum = new Forum();
    $forum->createTopic($topicName);

    header("Location: forum.php");
  }
