<?php
    $message='';
    session_start();

    require_once ('includes/headers.php');

    require_once ('logics/dbConnection.php');

    $querystudent= mysqli_query($dBconn, "SELECT * FROM enrollment WHERE no= '".$_GET['id']."'");

    while ($fetchStudent= mysqli_fetch_array($querystudent))

    {
        $id=$fetchStudent['no'];
        $fullname=$fetchStudent['fullname'];
        $phonenumber=$fetchStudent['phonenumber'];
        $email=$fetchStudent['email'];
        $gender= $fetchStudent['gender'];
        $course= $fetchStudent['course'];

    }

    require_once('logics/processUpdate.php');

    

        
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
                    <div class="card">
                            <div class="card-header bg-dark text-white text-center">
                                <h4>Edit  <?php echo $fullname ?></h4>
                                <?php echo $message ?>
                            </div>
                        <div class="card-body">
                            <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="full name" class="form-label"><b>Full Name:</b></label>
                                        <input type="text" class="form-control" id="full name" placeholder="Enter your full name" name="fullname" value="<?php echo $fullname ?>">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="phone" class="form-label"><b>Phone number:</b></label>
                                        <input type="tel" class="form-control" id="phone" placeholder="+2547...." name="phone" value="<?php echo $phonenumber ?>">
                                    </div>
                                </div>
                    
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="email" class="form-label"><b>Email address:</b></label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" value="<?php echo $email?>">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="gender" class="form-label"><b>What is your gender:</b></label>
                                        <select class="form-select" aria-label="Default select example" name="gender">
                                            <option><?php echo $gender ?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select> 
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="course" class="form-label"><b>What is your preffered course ?</b></label>
                                        <select class="form-select" aria-label="Default select example" name="course">
                                            <option><?php echo $course ?></option>
                                            <option value="Web development">Web development</option>
                                            <option value="Cyber security">Cyber security</option>
                                        </select>
                                    </div>
                            
                                </div>
                                <br>
                                <button type="submit" name="updateEnrollment" class="btn btn-primary mb-3">Update Records</button> 
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