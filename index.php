<?php
  session_start();

  if (!isset($_SESSION['Email'])) {
    header('Location: login.php');
  }
 ?>

<html>
<head>
  <meta charset="utf-8"></meta>
  <link rel="stylesheet" type="text/css" href="Assets/css/main.css">
  <script src="Assets/js/main.js"></script>
</head>
<body>
  <div class="header">
    <h1>Studentgatans Bostadsförening: TVÄTTSTUGAN</h1>
  </div>
  <div class="menu">
    <ul>
      <li><a href="index.php">Hem</a></li>
      <li><a href="messageboard.php">Anslagstavla</a></li>
      <li><a href="forum.php">Forum</a></li>
    </ul>
  </div>
  <div class="main">
    <div class="buttons">
      <form action="booking.php">
        <input class="booking_button" type="submit" name="booking" value="Boka Tid">
      </form>
      <form action="complaint.php">
        <input class="complaint_button" type="submit" name="complaint" value="Gnäll">
      </form>
      <form action="logout-process.php">
        <button type="button" onclick="location.href='logout-process.php'">Logout</button>
      </form>
    </div>
  </div>
</body>
</html>
