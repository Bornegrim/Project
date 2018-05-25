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

  }
