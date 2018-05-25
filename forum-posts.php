<?php

require '/include/bootstrap.php';

if (isset($_POST['topicName']) && isset($_POST['topicID'])) {
  $topicName = $_POST['topicName'];
  $topicID = $_POST['topicID'];


  $forum = new Forum();
  $allPosts = $forum->getAllForumPosts($topicID);

  include 'include/views/_forum-posts.php';
  include 'include/views/_forum-posts-new.php';

}
