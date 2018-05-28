<?php

require 'include/bootstrap.php';

$authorizer-> kill('Email');

header("Location: login.php");
exit();
