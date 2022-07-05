<?php

    session_start();

    require_once ('includes/headers.php')
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
                         <span>Top content</span>
                    </div>
                    <div class="card-body">
                        <span><i class="fa fa-folder-open fa-3x"></i></span>
                        <span class="float-end">00</span>   
                    </div>
                    <div class="card-footer"></div>
                </div>
                
                <div class="col-lg-3">
                    <div class="card-header bg-dark text-white text-center">
                         <span>Top content</span>
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
                        <span class="float-end">00</span>
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