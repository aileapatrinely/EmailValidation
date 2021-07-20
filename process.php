<?php
session_start();
//require_once() statement identical to require() except PHP will check if the file has already been included and not include it again.
require_once('new-connection.php');
//Is there a benefit to using a boolean instead of an array of error messages?
$_SESSION['error'] = false;

//handling post from form
?>