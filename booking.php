<?php

$session = $authorizer->sessionExist('Email');

if (!$session) {
  header('Location: login.php');
  exit();
}

include 'include/views/booking.php';
