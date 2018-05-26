<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="Assets/js/main.js"></script>
    <title></title>
  </head>
  <body>

  </body>
</html>

<?php

    if (count($allPosts) > 0) {
        echo '<div class="post_container">';
        echo $topicName;
        echo '';
        foreach ($allPosts as $post) {
            echo '<div class="post"> ';
            echo '<div class="name"> ';
            echo $post['FirstName'] . ": ";
            echo "</div>";
            echo $post['Message'];
            echo '</br>';
            echo $post['Date'];
            echo "</div>";
            if (isset($_SESSION['Admin'])) {
              echo '<form action="delete-forum-posts-process.php" method="post" name="deletePost" id="deletePost">
                    <input type="text" class="hide" name="postID" id="postID" value="'.$post['Forum_PostID'].'"><br>
                    <button type="submit" name="delete" id="delete">delete</button>
                    </form>
                    ';
        }
        echo '</div>';

  }
}
