

<?php
require_once ('logics/dbConnection.php');

if(isset($_POST["Submitbutton"]))
{
    $fullname=$_POST["fullname"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $course=$_POST["course"];

    $insert=mysqli_query($dBconn, "INSERT INTO enrollment(fullname, phonenumber, email, gender, course) VALUES('$fullname', '$phone', '$email', '$gender', '$course')");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.1.3-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css"/>
    <title>Students</title>
</head>
<body>
    <?php  require_once ('includes/navbar.php') ?>

    <div class="side-bar">
    <?php require_once ('includes/sidebar.php') ?>

    </div>

    <div class="main-content">
        <div class="container-fluid">
           <div class="card">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Students Table</span>
                        </div>
                    
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                        <form action="add-student.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="full name" class="form-label"><b>Full Name:</b></label>
                                    <input type="text" class="form-control" id="full name" placeholder="Enter your full name" name="fullname">
                                </div>
                                <div class="col-lg-6">
                                    <label for="phone" class="form-label"><b>Phone number:</b></label>
                                    <input type="tel" class="form-control" id="phone" placeholder="+2547...." name="phone">
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="email" class="form-label"><b>Email address:</b></label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                                </div>
                                <div class="col-lg-6">
                                    <label for="gender" class="form-label"><b>What is your gender:</b></label>
                                    <select class="form-select" aria-label="Default select example" name="gender">
                                        <option selected>--select your gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select> 
                                </div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="course" class="form-label"><b>What is your preffered course ?</b></label>
                                    <select class="form-select" aria-label="Default select example" name="course">
                                        <option selected>--Select your course--</option>
                                        <option value="Web development">Web development</option>
                                        <option value="Cyber security">Cyber security</option>
                                    </select>
                                </div>
                            
                            </div>
                            
                           
                            
                            
                        
                            <button type="submit" name="Submitbutton" class="btn btn-primary mb-3">submit application</button> 
                        </form>
                            
                        </div>
                    </div>
                </div>
           </div>
        </div>

        
    </div>
            

    <?php require_once ('includes/scripts.php') ?>
</body>
</html>





