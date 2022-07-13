<?php 
require_once ('logics/dbConnection.php');

$sqlFetchEnrolledStudents= mysqli_query($dBconn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");

while ($fetchStudents= mysqli_fetch_array($sqlFetchEnrolledStudents))
{
    $fullname= $fetchStudents['fullname'];
    $email= $fetchStudents['email'];
    $phonenumber= $fetchStudents['phonenumber'];
    $gender= $fetchStudents['gender'];
    $course= $fetchStudents['course'];
    $created= $fetchStudents['created_at'];
}




?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once ('includes/headers.php') ?>
<body>
    <?php  require_once ('includes/navbar.php') ?>
    <div class="side-bar">
      <?php require_once ('includes/sidebar.php') ?>
    </div>

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header text-center bg-dark text-white">
                            <h4 class="card-title">Personal Information</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Full name: 
                                    <span class="float-end badge bg-primary">
                                        <?php echo $fullname ?>
                                    </span>
                                </li>
                                <li class="list-group-item">Email:
                                    <span class="float-end badge bg-secondary">
                                    <?php echo $email ?>
                                    </span>
                                </li>
                                <li class="list-group-item">Phone number:
                                    <span class="float-end badge bg-danger">
                                        <?php echo $phonenumber ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header text-center bg-dark text-white">
                            <h4 class="card-title">Other Information</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Gender: 
                                    <span class="float-end badge bg-primary">
                                        <?php echo $gender ?>
                                    </span>
                                </li>
                                <li class="list-group-item">Course:
                                    <span class="float-end badge bg-secondary">
                                    <?php echo $course ?>
                                    </span>
                                </li>
                                <li class="list-group-item">Created At:
                                    <span class="float-end badge bg-danger">
                                        <?php echo $created ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
            
            
            
    </div>




   <?php require_once ('includes/scripts.php') ?>
</body> 
</html>