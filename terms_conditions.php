<?php

require 'include/bootstrap.php';
$session = $authorizer->sessionExist('Email');

if ($session) {
    include 'include/views/_header.php';
}
else {
    include 'include/views/_header2.php';
}

include 'include/views/terms_conditions.php';
include 'include/views/_footer.php';