<?php

  require 'include/bootstrap.php';

  if (isset($_POST['date'])) {
    $date = $_POST['date'];
    $booking = new Booking();
    $result = $booking->getAllBookingsByDate($date);

    $times = '
                <select name="machine" id="machine" onchange="showSelected(this.value)">
                <option value="1">Tvättmaskin 1</option>
                <option value="2">Tvättmaskin 2</option>
                <option value="3">Tvättmaskin 3</option>
                </select>
                    <form action="booking-process.php" method="post" id="bookingForm1" class="show" name="bookingForm1">';
    $form1block1 = '<input name="block1" type="submit" class="blue_button" value="07:00 – 10:00"><br>';
    $form1block2 = '<input name="block2" type="submit" class="blue_button" value="10:00 – 13:00"><br>';
    $form1block3 = '<input name="block3" type="submit" class="blue_button" value="13:00 – 16:00"><br>';
    $form1block4 = '<input name="block4" type="submit" class="blue_button" value="16:00 – 19:00"><br>';
    $form1block5 = '<input name="block5" type="submit" class="blue_button" value="19:00 – 22:00">
                    <input name="date" id="date" class="hide" type="text" value=" '. $date .' ">
                    <input name="machine" id="machine" class="hide" type="text" value="1">
                    </form>';
    $form2 =        '<form action="booking-process.php" method="post" id="bookingForm2" class="hide" name="bookingForm2">';
    $form2block1 =  '<input name="block1" type="submit" class="blue_button" value="07:00 – 10:00"><br>';
    $form2block2 = '<input name="block2" type="submit" class="blue_button" value="10:00 – 13:00"><br>';
    $form2block3 = '<input name="block3" type="submit" class="blue_button" value="13:00 – 16:00"><br>';
    $form2block4 = '<input name="block4" type="submit" class="blue_button" value="16:00 – 19:00"><br>';
    $form2block5 = '<input name="block5" type="submit" class="blue_button" value="19:00 – 22:00">
                    <input name="date" id="date" class="hide" type="text" value=" '. $date .' ">
                    <input name="machine" id="machine" class="hide" type="text" value="2">
                    </form>';
    $form3 =        '<form action="booking-process.php" method="post" id="bookingForm3" class="hide" name="bookingForm3">';
    $form3block1 =  '<input name="block1" type="submit" class="blue_button" value="07:00 – 10:00"><br>';
    $form3block2 = '<input name="block2" type="submit" class="blue_button" value="10:00 – 13:00"><br>';
    $form3block3 = '<input name="block3" type="submit" class="blue_button" value="13:00 – 16:00"><br>';
    $form3block4 = '<input name="block4" type="submit" class="blue_button" value="16:00 – 19:00"><br>';
    $form3block5 = '<input name="block5" type="submit" class="blue_button" value="19:00 – 22:00">
                    <input name="date" id="date" class="hide" type="text" value=" '. $date .' ">
                    <input name="machine" id="machine" class="hide" type="text" value="3">
                    </form>';

    if (count($result) > 0) {

      foreach ($result as $row) {
        if ($row['TimeblockNumber'] == "1" && $row['Machine'] == "1") {
          $form1block1 = '<input name="block1" type="submit" class="disable_button" value="07:00 – 10:00"><br>';
        }
        if ($row['TimeblockNumber'] == "2" && $row['Machine'] == "1") {
          $form1block2 = '<input name="block2" type="submit" class="disable_button" value="10:00 – 13:00><br>';
        }
        if ($row['TimeblockNumber'] == "3" && $row['Machine'] == "1") {
          $form1block3 = '<input name="block3" type="submit" class="disable_button" value="13:00 – 16:00"><br>';
        }
        if ($row['TimeblockNumber'] == "4" && $row['Machine'] == "1") {
          $form1block4 = '<input name="block4" type="submit" class="disable_button" value="16:00 – 19:00"><br>';
        }
        if ($row['TimeblockNumber'] == "5" && $row['Machine'] == "1") {
          $form1block5 = '<input name="block5" type="submit" class="disable_button" value="19:00 – 22:00">
                          <input name="date" id="date" class="hide" type="text" value=" '. $date .' ">
                          <input name="machine" id="machine" class="hide" type="text" value="1">
                          </form>';
        }
        if ($row['TimeblockNumber'] == "1" && $row['Machine'] == "2") {
          $form2block1 = '<form action="booking-process.php" method="post" id="machine2" class="hide" name="machine2">
                          <input name="block1" type="submit" class="disable_button" value="07:00 – 10:00"><br>';
        }
        if ($row['TimeblockNumber'] == "2" && $row['Machine'] == "2") {
          $form2block2 = '<input name="block2" type="submit" class="disable_button" value="10:00 – 13:00"><br>';
        }
        if ($row['TimeblockNumber'] == "3" && $row['Machine'] == "2") {
          $form2block3 = '<input name="block3" type="submit" class="disable_button" value="13:00 – 16:00"><br>';
        }
        if ($row['TimeblockNumber'] == "4" && $row['Machine'] == "2") {
          $form2block4 = '<input name="block4" type="submit" class="disable_button" value="16:00 – 19:00"><br>';
        }
        if ($row['TimeblockNumber'] == "5" && $row['Machine'] == "2") {
          $form2block5 = '<input name="block5" type="submit" class="disable_button" value="19:00 – 22:00">
                          <input name="date" id="date" class="hide" type="text" value=" '. $date .' ">
                          <input name="machine" id="machine" class="hide" type="text" value="2">
                          </form>';
        }
        if ($row['TimeblockNumber'] == "1" && $row['Machine'] == "3") {
          $form3block1 = '<input name="block1" type="submit" class="disable_button" value="07:00 – 10:00"><br>';
        }
        if ($row['TimeblockNumber'] == "2" && $row['Machine'] == "3") {
          $form3block2 = '<input name="block2" type="submit" class="disable_button" value="10:00 – 13:00"><br>';
        }
        if ($row['TimeblockNumber'] == "3" && $row['Machine'] == "3") {
          $form3block3 = '<input name="block3" type="submit" class="disable_button" value="13:00 – 16:00"><br>';
        }
        if ($row['TimeblockNumber'] == "4" && $row['Machine'] == "3") {
          $form3block4 = '<input name="block4" type="submit" class="disable_button" value="16:00 – 19:00"><br>';
        }
        if ($row['TimeblockNumber'] == "5" && $row['Machine'] == "3") {
          $form3block5 = '<input name="block5" type="submit" class="disable_button" value="19:00 – 22:00">
          <input name="date" id="date" class="hide" type="text" value=" '. $date .' ">
          <input name="machine" id="machine" class="hide" type="text" value="3">
          </form>';
        }

      }
    }



    $times = $times . $form1block1 . $form1block2 . $form1block3 . $form1block4 .
             $form1block5 . $form2 . $form2block1 . $form2block2 . $form2block3 . $form2block4 . $form2block5 .
             $form3 . $form3block1 . $form3block2 . $form3block3 . $form3block4 . $form3block5;

    echo $times;
    }
