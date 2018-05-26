<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <title></title>
  </head>
  <body>
    <div class="forum_container">
        <div class="forum">
            <?php

            if (count($bookings) > 0) {
                echo '<div class="forum_topic_container">';
                echo '<div class="forum_topic_header">Avboka</div>';

                foreach ($bookings as $booking) {

                  if (!isset($_SESSION['Admin']) && $_SESSION['User'] == $booking['User']) {
                    echo '<div class=""> ';
                    echo $booking['FirstName'] . '<br>';
                    echo $booking['TimeblockNumber'] . '<br>';
                    echo $booking['DateBooked'] . '<br>';
                    echo $booking['Machine'] . '<br>';

                    echo '<form action="cancel-booking-process.php" method="post"  class="" id="cancelForm" name="cancelForm">';
                    echo '<input name="TimeblockID" id="TimeblockID" class="hide" type="text" value=" '.$booking['TimeblockID'].' ">';
                    echo '<input name="cancel" id="cancel" type="submit">';
                    echo '</form>';
                    echo "</div>";
                  }

                  if (isset($_SESSION['Admin'])) {
                    echo '<div class=""> ';
                    echo $booking['FirstName']. '<br>';
                    echo $booking['TimeblockNumber']. '<br>';
                    echo $booking['DateBooked']. '<br>';
                    echo $booking['Machine']. '<br>';

                    echo '<form action="cancel-booking-process.php" method="post" id="cancelForm" class="" name="cancelForm">';
                    echo '<input name="TimeblockID" id="TimeblockID" class="hide" type="text" value=" '.$booking['TimeblockID'].' ">';
                    echo '<input name="cancel" id="cancel" type="submit">';
                    echo '</form>';
                    echo "</div>";
                  }

                }
                echo '</div>';
            }
            ?>
      </div>
    </div>
    }
  </body>
</html>
