<?php
session_start();
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
    <!-- gonna need the form for logout here  -->
</body>
</html>
