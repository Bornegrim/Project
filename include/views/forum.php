<!DOCTYPE html>
<html lang="swe" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <meta charset="utf-8">
    <title>Forum</title>
  </head>
  <body>
      <div class="forum_container">
          <div class="forum">
              <?php
              $forum = new Forum();
              $topics = $forum-> getAllTopics();
              if (count($topics) > 0) {
                  echo '<div class="forum_topic_container">';
                  echo '<div class="forum_topic_header">Ämnen</div>';

                  foreach ($topics as $topic) {
                      echo '<div class=""> ';
                      echo '<form action="forum-posts.php" method="post" id="topic" class="" name="topic">';
                      echo '<input class="forum_topic" name="topicName" id="topicName" type="submit" value=" '.$topic['Topic'].'">';
                      echo '<input name="topicID" id="topicID" class="hide" type="text" value=" '.$topic['ForumID'].' ">';
                      echo '</form>';
                      echo "</div>";
                      if (isset($_SESSION['Admin'])) {
                        echo '<form action="forum-delete-process.php" method="post" name="deletePost" id="deletePost">
                              <input type="text" class="hide" name="forumID" id="forumID" value="'.$topic['ForumID'].'"><br>
                              <button type="submit" name="delete" id="delete">delete</button>
                              </form>
                              ';
                            }
                  }
                  echo '</div>';
              }
              ?>
        </div>
      </div>
  </body>
</html>
