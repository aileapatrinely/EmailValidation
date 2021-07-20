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
    <h3>Previously Entered Email Addresses:</h3>
    <?php foreach($_SESSION['emails'] as $email){ ?>
        <div>
            <p><?=$email['email'] ?> <?=
            date_format(date_create($email['created_at']), 'm/d/y h:i A') ?></p>
            <form action="process.php" method="post">
                <input type="hidden" name="email_id" value="<?= $email['id'] ?>">
                <input type="hidden" name="action" value="delete">
                <input type="submit" value="Delete">
            </form>
        </div>
    <?php } ?>
</body>
</html>