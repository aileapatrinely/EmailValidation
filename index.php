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
        <label for="email">Email</label>
        <input id="email" type="text" name="email">
        <input id="submit" value="register">
    </form>
</body>
</html>
