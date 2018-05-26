<html lang="swe" dir="ltr">
<head>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
    <body>
        <div class="forum_container">
            <div class="forum">
                <div class="messageBoard_input">
                    <form class="messageBoard_form" name="forumPost" action="forum-post-process.php" method="post" id="forumPost">
                        Skriv ett meddelande till <?php echo $topicName ?>: <br>
                        <textarea rows="4" cols="40" class="comment" type="text" id ="message" name="message"> </textarea><br>
                        <input class="submit_comment" type="submit" name="forumPostSubmit" id="forumPostSubmit" value="Lägg upp meddelande">
                        <input name="topicID" id="topicID" class="hide" type="text" value="<?php echo $topicID ?>">
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>
