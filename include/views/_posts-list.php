<html lang="swe" dir="ltr">
  <head>

  </head>
    <body>

        <div class="messageBoard">
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
                          echo '<form action="delete-posts-process.php" method="post">
                                <input type="text" class="hide" name="postID" id="postID" value="'.$post['PostID'].'"><br>
                                <button type="submit" name="delete" id="delete">delete</button>
                                </form>';
                        }
                        echo "</div>";
                    }
                    echo '</div>';
                }
            ?>
        </div>
    </body>
