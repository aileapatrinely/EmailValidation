<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="first_name">First Name</label>
        <input id="first_name" type="text" name="first_name">
        <label for="last_name">Last Name</label>
        <input id="last_name" type="text" name="last_name">
        <label for="email">Email</label>
        <input id="email" type="text" name="email">
        <label for="password">Password</label>
        <input id="password" type="text" name="password">
        <label for="c_password">Confirm Password</label>
        <input id="c_password" type="text" name="c_password">
        <input id="submit" value="register">
    </form>
</body>
</html>
