<?php

  require 'include/bootstrap.php';
  
    $topicName = $_POST['forumTopic'];

    $forum = new Forum();
    $forum->createTopic($topicName);
