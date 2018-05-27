<?php

  require 'include/bootstrap.php';

  
    $postID = $_POST['postID'];
    $post = new Post();
    $post->deletePost($postID);
