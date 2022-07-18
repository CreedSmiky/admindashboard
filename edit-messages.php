<?php
    $message='';
    session_start();

    require_once ('includes/headers.php');

    require_once ('logics/dbConnection.php');

    $querymessage= mysqli_query($dBconn, "SELECT * FROM contactus WHERE number= '".$_GET['id']."'");

    while ($fetchmessage= mysqli_fetch_array($querymessage))

    {
        $id=$fetchmessage['number'];
        $firstname=$fetchmessage['firstname'];
        $lastname= $fetchmessage['lastname'];
        $phonenumber=$fetchmessage['phonenumber'];
        $email=$fetchmessage['email'];
        $messages= $fetchmessage['message'];

    }

    require_once('processMessageUpdate.php');

    

        
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
                                <h4>Edit  <?php echo $firstname ?></h4>
                                <?php echo $message ?>
                                <a href="contactus.php" class= "float-start btn btn-outline-primary btn-sm"><i class= "fa fa-arrow-left"></i> Back</a> 
                            </div>
                        <div class="card-body">
                            <form action="edit-messages.php?id=<?php echo $id ?>" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="full name" class="form-label"><b>First Name:</b></label>
                                        <input type="text" class="form-control" id="full name" placeholder="Enter your full name" name="fullname" value="<?php echo $firstname ?>">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="full name" class="form-label"><b>Last Name:</b></label>
                                        <input type="text" class="form-control" id="full name" placeholder="Enter your full name" name="fullname" value="<?php echo $lastname ?>">
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