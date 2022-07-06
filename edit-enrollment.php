<?php

    session_start();

    require_once ('includes/headers.php');

    require_once ('logics/dbConnection.php');

    $querystudent= mysqli_query($dBconn, "SELECT * FROM enrollment WHERE no= '".$_GET['id']."'");

    while ($fetchStudent= mysqli_fetch_array($querystudent))

    {
        $fullname=$fetchStudent['fullname'];

    }
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            
            
    </div>




   <?php require_once ('includes/scripts.php') ?>
</body> 
</html>