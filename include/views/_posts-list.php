<html lang="swe" dir="ltr">
  <head>
	<meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="Assets/js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="Assets/css/main.css">
  </head>
    <body>

        <div name="updateAjax" id="updateAjax" class="messageBoard">
            <?php
                $post = new Post();
                $allPosts = $post-> getAllPosts();
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
                        if (isset($_SESSION['Admin'])) {
                          echo '<form id="deletePost" name="deletePost" action="" method="post">
                                <input type="text" class="hide" name="postID" id="postID" value="'.$post['PostID'].'"><br>
                                <button type="button" class="deletebutton" name="delete" id="delete">Ta bort</button>
                                </form>';
                        }
                        echo "</div>";
                    }
                    echo '</div>';
                }
            ?>
        </div>
    </body>
