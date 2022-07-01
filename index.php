<?php

    session_start();
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
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="header">
        <img src="images/zalego.jfif" alt="image" class="image">
        <a href="#" class="navbar-trigger"><span></span></a>
    </div>

    <div class="side-bar">
        <nav>
            <ul>
                <li>
                    <a href="students.html">
                        <span><i class="fa fa-group"></i></span>
                        <span>Students</span>
                    </a>
                </li>
                
                <li>
                    <a href="">
                        <span><i class="fa fa-folder-open"></i></span>
                        <span>Courses</span>
                    </a>
                </li>
                
                <li>
                    <a href="">
                        <span><i class="fa fa-graduation-cap"></i></span>
                        <span>Campus</span>
                    </a>
                </li>
                
            </ul>

        </nav>

    </div>

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Top content</span>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-lg-3">
                   <div class="card-header bg-dark text-white text-center">
                        <span>Students</span>
                   </div>
                   <div class="card-body">
                    <span><i class="fa fa-group fa-3x"></i></span>
                    <span class="float-right">00</span>
                   </div>
                   <div class="card-footer"></div>
                </div>
                

                <div class="col-lg-3">
                    <div class="card-header bg-dark text-white text-center">
                         <span>Top content</span>
                    </div>
                    <div class="card-body">
                        <span><i class="fa fa-folder-open fa-3x"></i></span>
                        <span class="float-right">00</span>   
                    </div>
                    <div class="card-footer"></div>
                </div>
                
                <div class="col-lg-3">
                    <div class="card-header bg-dark text-white text-center">
                         <span>Top content</span>
                    </div>
                    <div class="card-body">
                        <span><i class="fa fa-graduation-cap fa-3x"></i></span>
                        <span class="float-right">00</span>
                    </div>
                    <div class="card-footer"></div>
                 </div>

                 <div class="col-lg-3">
                    <div class="card-header bg-dark text-white text-center">
                         <span>Top content</span>
                    </div>
                    <div class="card-body">
                        <span><i class="fa fa-user fa-3x"></i></span>
                        <span class="float-right">00</span>
                    </div>
                    <div class="card-footer"></div>
                 </div>
                 

                 <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Students Analysis</span>
                    </div>
                 </div>
            </div>
        </div>
    </div>




    <script src="bootstrap-5.2.0/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</body>
</html>