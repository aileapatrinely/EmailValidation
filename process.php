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
        $query = "INSERT INTO emails (email, created_at, updated_at) VALUES ('{$_POST['email']}', NOW(), NOW())";
        $last_row_id = run_mysql_query($query);
        if($last_row_id){
            //hang onto the emails and move user to success.php
            $_SESSION['email'] = $_POST['email'];
            $query = "SELECT * FROM emails ORDER BY created_at DESC";
            $emails = fetch_all($query);
            $_SESSION['emails'] = $emails;
            // move them to success and kill it
            header('location: success.php');
            die();
        }else{
        //save fails die
        die('Error: Bad insert operation');
        }
    }
}else if(!empty($_POST) && isset($_POST['action'])){
    if($_POST['action'] == 'delete'){
        //this is our delete $query
        $query = "DELETE FROM emails WHERE id = {$_POST['email_id']}";
        run_mysql_query($query);
        // successful delete get new list of emails
        $query = "SELECT * FROM emails";
        $emails = fetch_all($query);
        $_SESSION ['emails'] = $emails;
        //move to success and kill it
        header('location: success.php');
        die();
    }else{
        //die
        die('delete form submitted but action is not equal to delete');
    }
}else{
    header('location: index.php');
    die();
}
?>