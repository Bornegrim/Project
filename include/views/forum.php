<!DOCTYPE html>
<html lang="swe" dir="ltr">
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <meta charset="utf-8">
    <title>Forum</title>
  </head>
  <body>
    <div class="">
      <?php
      $forum = new Forum();
      $topics = $forum-> getAllTopics();
      if (count($topics) > 0) {
          echo '<div class="">';

          foreach ($topics as $topic) {
              echo '<div class=""> ';
              echo '<form action="forum-posts.php" method="post" id="topic" class="" name="topic">';
              echo '<input name="topicName" id="topicName" type="submit" value=" '.$topic['Topic'].'">';
              echo '<input name="topicID" id="topicID" class="hide" type="text" value=" '.$topic['ForumID'].' ">';
              echo '</form>';
              echo "</div>";
              echo '</br>';
          }
          echo '</div>';
      }
       ?>
    </div>
  </body>
</html>
