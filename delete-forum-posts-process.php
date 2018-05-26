<?php

  require 'include/bootstrap.php';

  if (isset($_POST['delete'])) {
    $postID = $_POST['postID'];
    $forum = new Forum();
    $forum->deleteForumPost($postID);

    header ("Location: forum.php");
  }
