<?php 

$msg='';

require_once('processRegister.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.1.3-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Zalego Register</title>
</head>
<body>
    <div class="register-header">Zalego| Admin Register</div>

    <div class="logo"><img src="images/zalego.jfif" alt="logo"></div>
    <span><?php echo $msg ?></span>
    <div class="container . shadow">

        <form action="register.php" method="POST">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">

            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">

            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">

            <label for="confirm" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm" name="confirm">

            <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>

            <p class="mt-3">Have account ? Sign in <a href="#" style="text-decoration: none;">Here</a></p>
        </form>
    </div>
    
</body>
</html>