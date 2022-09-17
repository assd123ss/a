<?php session_start(); ?>
<?php

if (!$_SESSION["UserID"]) {
    Header("Location: form.php");
}else {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>สถานะแอดมิน</h1>
    <p><strong>hi</strong> :&nbsp;
    <?php session_destroy(); ?>
    </p>
    <p>&nbsp;</p>
    <p><a href="logout.php">Log out </strong></a></p>
    <p>&nbsp;</p>
</body>
</html>
<?php } ?>
    
