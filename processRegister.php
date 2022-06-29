<?php

    require_once('connection.php');

    if(isset($_POST["submit"]))
    {
            $username=$_POST["username"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $cpassword=$_POST["confirm"];

            $passHash=md5($password);

        // check if username already exists
        $sqlUsername= mysqli_query($dBconn, "SELECT * FROM account WHERE username = '$username' ");
        
        $checkUsername=mysqli_num_rows($sqlUsername);


        // check if email already exists

        $sqlEmail= mysqli_query($dBconn, "SELECT * FROM account WHERE email ='$email' ");
        $checkEmail= mysqli_num_rows($sqlEmail);

        if ($checkUsername != 0){
            $msg="Username already exist";
        }

        elseif ($checkEmail != 0){
            $msg="Email already in use. Please try a different email address";
        }

        elseif ($password != $cpassword)
        {
            $msg ="Password do not match" ;
        }

        else{
            
            // create insert query

            $insert= mysqli_query($dBconn, "INSERT INTO account(username, email, password) VALUES('$username','$email', '$passHash')");
        }

        if ($insert)
        {
            $msg= "Data submitted succesfully";
        }

        else {
            $msg="Error occured";
        }
    }
    
   
?>  