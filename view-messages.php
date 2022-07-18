<?php 
require_once ('logics/dbConnection.php');

$sqlFetchmessage= mysqli_query($dBconn, "SELECT * FROM contactus WHERE number='".$_GET['id']."'");

while ($fetchSmessages= mysqli_fetch_array($sqlFetchmessage))
{
    $firstname= $fetchSmessages['firstname'];
    $lastname= $fetchSmessages['lastname'];
    $email= $fetchSmessages['email'];
    $phonenumber= $fetchSmessages['phonenumber'];
    $message= $fetchSmessages['message'];
    $created= $fetchSmessages['created_at'];
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
                                <li class="list-group-item">Firstname: 
                                    <span class="float-end badge bg-primary">
                                        <?php echo $firstname ?>
                                    </span>
                                </li>
                                <li class="list-group-item">Lastname:
                                    <span class="float-end badge bg-secondary">
                                    <?php echo $lastname ?>
                                    </span>
                                </li>
                                <li class="list-group-item">Email:
                                    <span class="float-end badge bg-danger">
                                        <?php echo $email ?>
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
                                <li class="list-group-item">Message: 
                                    <span class="float-end badge bg-primary">
                                        <?php echo $message ?>
                                    </span>
                                </li>

                                <li class="list-group-item">Phonenumber: 
                                    <span class="float-end badge bg-primary">
                                        <?php echo $phonenumber ?>
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