<?php

require 'include/bootstrap.php';

$forumID = $_POST['forumID'];

$forum = new Forum();
$forum->deleteForumTopic($forumID);
