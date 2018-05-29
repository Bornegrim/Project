<!DOCTYPE html>
<html lang="swe" dir="ltr">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="Assets/js/main.js"></script>
  <meta charset="utf-8">
  <title>Forum</title>
</head>
<body>
  <div class="forum_container">
    <div class="forum" name="forum" id="forum">
      <?php
      $forum = new Forum();
      $topics = $forum-> getAllTopics();
      if (count($topics) > 0) {
        echo '<div class="forum_topic_container">';
        echo '<div class="forum_topic_header">Ämnen</div>';

        foreach ($topics as $topic) {
            echo '<div class="each_topic">';
          /*echo '<div class="topics"> ';*/
          echo '<form action="forum-posts.php" method="post" id="topic" class="topics" name="topic">';
          echo '<input class="forum_topic" name="topicName" id="topicName" type="submit" value=" '.$topic['Topic'].'">';
          echo '<input name="topicID" id="topicID" class="hide" type="text" value=" '.$topic['ForumID'].' ">';
          echo '</form>';
          /*echo "</div>";*/
          if (isset($_SESSION['Admin'])) {
            echo '<form action="" method="post" name="deletePost" id="deletePost" class="topics">
            <input type="text" class="hide" name="forumID" id="forumID" value="'.$topic['ForumID'].'"><br>
            <button type="submit" class="deletebutton" name="delete" id="delete">Ta bort</button>
            </form>';
          }
            echo '</div>';
        }
        echo '</div>';
      }
      ?>
    </div>
  </div>
</body>
</html>
