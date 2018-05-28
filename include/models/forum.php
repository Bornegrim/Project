<?php

class Forum extends Db {

  public function createTopic($topicName) {

    $db = new Db();
    if(!(trim($topicName) == "") && !(trim($topicName)==" ")) {
      $db -> createTopic($db->escape($topicName));
    }

  }

  public function createForumPost($date, $message, $ForumID, $UserID) {
    $db = new Db();
    $conn = $db->connect();

    if(!(trim($message) == "") && !(trim($message)==" ")) {
      $db -> createForumPost($db->escape($date), $db->escape($message), $db->escape($ForumID), $db->escape($UserID));
    }

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
    $result = $db->getAllForumPosts($db->escape($ForumID));

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
    $db->deleteForumTopic($db->escape($forumID));
  }

  public function deleteForumPost($forumPostID) {
    $db = new Db();
    $db->deleteForumPost($db->escape($forumPostID));
  }
}
