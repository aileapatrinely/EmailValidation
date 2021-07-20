<?php
session_start();
//require_once() statement identical to require() except PHP will check if the file has already been included and not include it again.
require_once('new-connection.php');
//Is there a benefit to using a boolean instead of an array of error messages?
$_SESSION['error'] = false;

//if statements checking post
if(!empty($_POST) && isset($_POST['email'])){
    //if statement checking filter_validate_email
        //set session error
        //header location
        //die
}else{
    //email passed validations so we save it
    //query statement for inserting into database
}
?>