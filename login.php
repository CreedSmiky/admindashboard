<?php

session_start();

// database connection

require_once('connection.php');

if (isset($_POST['login']))
{

    $username =$_POST['username'];
    $password=$_POST['password'];
    $newPass= md5($password);


    $sql = mysqli_query($dBconn, "SELECT * FROM account WHERE username= '$username' and password ='$newPass'");
    $fetch= mysqli_fetch_array($sql);

    if ($fetch > 0)

    {
        $_SESSION['login'] = $username;

       header('location: index.php'); 
    }
    else{
        echo "error";
    }
}





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.1.3-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Zalego Log in</title>
</head>
<body>
    
    <div class="login-header">Zalego| Admin Login</div>

    <div class="logo"><img src="images/zalego.jfif" alt="logo"></div>

    <div class="container shadow">

        <form action="login.php" method="POST">
            <label for="Username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" name="username">

            <label for="Password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="Password" name="password">

            <button type="submit" class="btn btn-primary mt-3" name="login">Submit</button>
            
            <p class="mt-3">Have no account? Sign up <a href="#" style="text-decoration:none ;">Here</a></p>

        </form>
    </div>
</body>
</html>