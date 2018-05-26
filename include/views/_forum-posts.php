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
