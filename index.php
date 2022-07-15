<?php

    session_start();

    require_once ('includes/headers.php');

    require_once('logics/dbConnection.php');

    // counting total number of students

    $queryEnrolledStudents= mysqli_query($dBconn, "SELECT * FROM enrollment");
    $countAllStudents = mysqli_num_rows($queryEnrolledStudents);

    // count for gender
    $queryEnrolledFemale = mysqli_query($dBconn, "SELECT * FROM enrollment WHERE gender = 'female'");
    $countAllFemale = mysqli_num_rows($queryEnrolledFemale);
?>


<!DOCTYPE html>
<html lang="en">

<body>
    <?php  require_once ('includes/navbar.php') ?>
    <div class="side-bar">
      <?php require_once ('includes/sidebar.php') ?>
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
                    <span class="float-end">00</span>
                   </div>
                   <div class="card-footer"></div>
                </div>
                

                <div class="col-lg-3">
                    <div class="card-header bg-dark text-white text-center">
                         <span>Courses</span>
                    </div>
                    <div class="card-body">
                        <span><i class="fa fa-folder-open fa-3x"></i></span>
                        <span class="float-end badge bg-dark rounded-pill"><?php echo $countAllFemale?></span>   
                    </div>
                    <div class="card-footer"></div>
                </div>
                
                <div class="col-lg-3">
                    <div class="card-header bg-dark text-white text-center">
                         <span>Campus</span>
                    </div>
                    <div class="card-body">
                        <span><i class="fa fa-graduation-cap fa-3x"></i></span>
                        <span class="float-end">00</span>
                    </div>
                    <div class="card-footer"></div>
                </div>

                <div class="col-lg-3">
                    <div class="card-header bg-dark text-white text-center">
                         <span>Top content</span>
                    </div>
                    <div class="card-body">
                        <span><i class="fa fa-user fa-3x"></i></span>
                        <span class="float-end badge bg-dark rounded-pill"><?php echo $countAllStudents?></span>
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




   <?php require_once ('includes/scripts.php') ?>
</body> 
</html>