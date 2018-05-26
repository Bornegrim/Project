<?php

  require 'include/bootstrap.php';

  if (isset($_POST['delete'])) {
    $postID = $_POST['postID'];
    $post = new Post();
    $post->deletePost($postID);
  }
