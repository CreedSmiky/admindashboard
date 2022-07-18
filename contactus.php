<?php 
require_once ('logics/dbConnection.php');

$contactus = mysqli_query ($dBconn, "SELECT * FROM contactus");






?>
<!DOCTYPE html>
<html>
<?php require_once ('includes/headers.php') ?>

<body>

    <?php  require_once ('includes/navbar.php') ?>


    <div class ="side-bar">

    <?php require_once ('includes/sidebar.php') ?>
    </div>

    <div class= "main-content">
        <div class= "container-fluid">
            <div class="card">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Contact Us Table</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body">
                        <table class = "table table-striped table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">NUMBER</th>
                                    <th scope="col">FIRSTNAME</th>
                                    <th scope="col">LASTNAME</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">PHONENUMBER</th>
                                    <th scope="col">MESSAGE</th>
                                    <th scope="col"> SENT ON</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                            <?php while($fetchmessage= mysqli_fetch_array($contactus)){?>
                                <tr>
                                    <td><?php echo $fetchmessage ['number'];?></td>
                                    <td><?php echo $fetchmessage ['firstname'];?></td>
                                    <td><?php echo $fetchmessage ['lastname'];?></td>
                                    <td><?php echo $fetchmessage ['email'];?></td>
                                    <td><?php echo $fetchmessage ['phonenumber'];?></td>
                                    <td><?php echo $fetchmessage ['message'];?></td>
                                    <td><?php echo $fetchmessage ['created_at'];?></td>

                                    <td>
                                    <a class="btn btn-primary btn-sm" href="edit-messages.php?id=<?php echo $fetchmessage['number'] ?>"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm" href="delete-message.php?id=<?php echo $fetchmessage['number']?>"><i class="fa fa-trash"></i></a>
                                    <a class="btn btn-info btn-sm" href="view-messages.php?id=<?php echo $fetchmessage['number']?>"><i class="fa fa-eye"></i></a>
                                    
                                    
                                    </td>
                                   
                                </tr>
                                <?php } ?>
                                    
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </div>

</body>

</html>