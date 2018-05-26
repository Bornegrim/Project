<?php

  class Post extends DB {

    public function getAllPosts() {

      $db = new Db();
      $conn = $db->connect();
      $posts = $db->getPosts();

      $numRows = mysqli_num_rows($posts);

      if ($numRows > 0) {
        while ($row = $posts->fetch_assoc()) {
          $data[] = $row;
        }
        return $data;
      }
    }

    public function createPost($message, $userID) {

      $db = new Db();
      $conn = $db->connect();
      $post = mysqli_real_escape_string($conn, trim($message));


      if (!Empty($post) && !($post == " ")) {
        $db->setPosts($message, $userID);
      }
    }

    public function deletePost($postID) {

      $db = new Db();
      $db->deletePost($postID);

    }
  }
