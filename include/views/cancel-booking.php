<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Assets/css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="Assets/js/main.js"></script>
  <title></title>
</head>
<body>
  <div class="forum_container">
    <div name="canceltest" id="canceltest" class="forum">
      <?php

      if (count($bookings) > 0) {
        echo '<div class="forum_topic_container">';
        echo '<div class="forum_topic_header">Avboka</div>';

        foreach ($bookings as $booking) {

          if (!isset($_SESSION['Admin']) && $_SESSION['User'] == $booking['User']) {
            echo '<div class=""> ';
            echo $booking['DateBooked'] . '<br>';
            if ($booking['TimeblockNumber'] == 1) {
              echo "07:00 - 10:00";
            }
            if ($booking['TimeblockNumber'] == 2) {
              echo "10:00 - 13:00";
            }
            if ($booking['TimeblockNumber'] == 3) {
              echo "13:00 - 16:00";
            }
            if ($booking['TimeblockNumber'] == 4) {
              echo "16:00 - 19:00";
            }
            if ($booking['TimeblockNumber'] == 5) {
              echo "19:00 - 22:00";
            }
            echo '<br>';

            echo "Tvättmaskin: ". $booking['Machine']. '<br>';
            echo '<form action="" method="post"  class="" id="cancelForm" name="cancelForm">';
            echo '<input name="TimeblockID" id="TimeblockID" class="hide" type="text" value=" '.$booking['TimeblockID'].' ">';
            echo '<input name="cancel" class="deletebutton" id="cancel" value="Avboka" type="button">';
            echo '</form>';
            echo "</div>";
          }

          if (isset($_SESSION['Admin'])) {
            echo '<div class=""> ';
            echo $booking['FirstName']. '<br>';
            echo $booking['DateBooked']. '<br>';
            if ($booking['TimeblockNumber'] == 1) {
              echo "07:00 - 10:00";
            }
            if ($booking['TimeblockNumber'] == 2) {
              echo "10:00 - 13:00";
            }
            if ($booking['TimeblockNumber'] == 3) {
              echo "13:00 - 16:00";
            }
            if ($booking['TimeblockNumber'] == 4) {
              echo "16:00 - 19:00";
            }
            if ($booking['TimeblockNumber'] == 5) {
              echo "19:00 - 22:00";
            }
            echo '<br>';

            echo "Tvättmaskin: ". $booking['Machine']. '<br>';

            echo '<form action="cancel-booking-process.php" method="post" id="cancelForm" class="" name="cancelForm">';
            echo '<input name="TimeblockID" id="TimeblockID" class="hide" type="text" value=" '.$booking['TimeblockID'].' ">';
            echo '<input name="cancel" class="deletebutton" id="cancel" value="Avboka" type="button">';
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
