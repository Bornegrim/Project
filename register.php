<?php

/*hej*/
require 'include/bootstrap.php';

$session = $authorizer->sessionExist('Email');

if ($session) {
  header('Location: index.php');
} else if (isset($_GET['registerfail'])) {
  echo "The e-mail adress is already in use";
}

include 'include/views/register.php';
include 'include/views/_footer.php';
