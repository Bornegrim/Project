<?php

  require 'include/bootstrap.php';


    $postID = $_POST['postID'];
    $forum = new Forum();
    $forum->deleteForumPost($postID);
