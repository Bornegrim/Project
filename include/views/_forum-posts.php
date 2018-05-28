<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="Assets/js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="Assets/css/main.css">
  <title></title>
</head>
<body>
  <div  class="forum_input_container">
    <div  class="forum_input">
      <div class="forum_title">
        <h1><?php echo $topicName ?></h1>
      </div>
      <?php
      echo '<div name="forumtest" id="forumtest"';
      if (count($allPosts) > 0) {
        echo '<div class="post_container">';
        foreach ($allPosts as $post) {
          echo '<div class="post"> ';
          echo '<div class="name"> ';
          echo $post['FirstName'] . ": ";
          echo "</div>";
          echo $post['Message'];
          echo '</br>';
          echo $post['Date'];
          if (!isset($_SESSION['Admin']) && $_SESSION['User'] == $post['UserID']) {
            echo '<form action="" method="post" name="deletePost" id="deletePost">
            <input type="text" class="hide" name="postID" id="postID" value="'.$post['Forum_PostID'].'"><br>
            <button type="button" class="deletebutton" name="delete" id="delete">Ta bort</button>
            </form>
            ';
          }
          if (isset($_SESSION['Admin'])) {
            echo '<form action="" method="post" name="deletePost" id="deletePost">
            <input type="text" class="hide" name="postID" id="postID" value="'.$post['Forum_PostID'].'"><br>
            <button type="button" class="deletebutton" name="delete" id="delete">Ta bort</button>
            </form>
            ';
          }
          echo "</div>";




        }
        echo '</div>';
      }?>
    </div>
  </div>
</div>
</body>
</html>
