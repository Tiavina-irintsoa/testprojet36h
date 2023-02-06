<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php echo site_url('user/check'); ?>
    
    <form action="<?php echo site_url('user/check'); ?>" method="post">
        <div>
            <label for="">
                Name
            </label>
            <input type="text" name="nom" id="" value="admin">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="mdp" id="" value="123456">
        </div>
        <div>
            <input type="submit" value="Log in">
        </div>
    </form>
</body>
</html>