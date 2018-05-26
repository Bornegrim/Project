<<<<<<< HEAD
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
=======
<div class="forum_input_container">
    <div class="forum_input">
        <div class="forum_title">
            <h1><?php echo $topicName ?></h1>
        </div>
        <?php
            if (count($allPosts) > 0) {
                echo '<div class="post_container">';
                echo $topicName;
                foreach ($allPosts as $post) {
                        echo '<div class="post"> ';
                        echo '<div class="name"> ';
                        echo $post['FirstName'] . ": ";
                        echo "</div>";
                        echo $post['Message'];
                        echo '</br>';
                        echo $post['Date'];
                        echo "</div>";
                }
                echo '</div>';
            }?>
    </div>
</div>
>>>>>>> b84c54ca457caa6d9835f855b81940db60784816
