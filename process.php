<?php
session_start();
//require_once() statement identical to require() except PHP will check if the file has already been included and not include it again.
require_once('new-connection.php');
//Is there a benefit to using a boolean instead of an array of error messages?
$_SESSION['error'] = false;

//if statements checking post
if(!empty($_POST) && isset($_POST['email'])){
    //if statement checking filter_validate_email
    if(!filter_var($_POST['email'], filter_validate_email)){
        //set session error
        $_SESSION['error']=true;
        //header location
        header('location: index.php');
        //die
        die();
    }else{
        //email passed validations so we save it
        //query statement for inserting into database
        //move it to success and kill it
        if($last_row_id){
            //something about last row id?
        }else{
        //save fails die
        }
    }
}else if(!empty($_POST) && isset($_POST['action'])){
    if($_POST['action'] == 'delete'){
        //this is our delete query
        //move to success and kill it
    }else{
        //die
        die('delete form submitted but action is not equal to delete');
    }
}else{
    header('location: index.php');
    die();
}
?>