<?php
  require 'include/bootstrap.php';

  if (isset($_POST['delete'])) {

    $forumID = $_POST['forumID'];

    $forum = new Forum();
    $forum->deleteForumTopic($forumID);

    header("Location: forum.php");
  }
