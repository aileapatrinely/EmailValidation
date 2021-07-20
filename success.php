<?php
session_start();
//set timezone
date_default_timezone_set('America/Chicago');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!</title>
</head>
<body>
    <h1>It is a valid email address!</h1>
    <p>Your Email: <?= $_SESSION['email'] ?></p>
    <!-- need to show the date  -->
    <h3>Previously Entered Email Addresses:</h3>
    <!--some php with a for loop to show emails and date created--!>
    <!-- maybe figure out a delete button/fx -->
</body>
</html>
