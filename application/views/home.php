<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/home.css">
</head>
<body>
    <big>
    Bonjour
    <?php
        echo $admin['nom'];
    ?>
    </big>
    <a href="<?php echo site_url('user/disconnect'); ?>">
        Disconnect
    </a>
</body>
</html>