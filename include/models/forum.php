<?php

class Forum extends Db {

  public function createTopic($topicName) {

    $db = new Db();
    $conn = $db->connect();

    $db -> createTopic(mysqli_real_escape_string($conn, $topicName));

  }

  public function createForumPost($date, $message, $ForumID, $UserID) {
    $db = new Db();
    $conn = $db->connect();
    $db -> createForumPost($date, mysqli_real_escape_string($conn, $message), $ForumID, $UserID);
  }

  public function getAllTopics() {
    $db = new Db();
    $result = $db->getAllTopics();

    $numRows = mysqli_num_rows($result);

    if ($numRows > 0) {
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    }

  }

  public function getAllForumPosts($ForumID) {
    $db = new Db();
    $result = $db->getAllForumPosts($ForumID);

    $numRows = mysqli_num_rows($result);

    if ($numRows > 0) {
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    }
  }

  public function deleteForumTopic($forumID) {
    $db = new Db();
    $db->deleteForumTopic($forumID);
  }

  public function editForumPost($forumPostID, $newMessage) {
    $db = new Db();
    $db->editForumPost($forumPostID, $newMessage);
  }
}
