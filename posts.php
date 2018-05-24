<html>
    <body>
        <?php include 'include/views/posts.php'; ?>
        <div class="messageBoard_container">
            <?php
            include 'include/views/_posts-list.php';
            if (isset($_SESSION['Admin'])) {
              include 'include/views/_posts-new.php';
            }
            ?>
        </div>
    </body>
</html>
