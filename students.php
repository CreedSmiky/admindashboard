<?php
require_once ('logics/dbConnection.php');

$sql = mysqli_query($dBconn, "SELECT * FROM enrollment");


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
                            <a href="add-student.php" class="btn btn-primary btn-sm float-end"><i class="fa fa-plus"></i></a>
                        </div>
                    
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <table class="table table-striped table-hover table-responsive" style="font-size:12px;">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">FULLNAME</th>
                                        <th scope="col">PHONE</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">COURSE</th>
                                        <th scope="col">GENDER</th>
                                        <th scope="col"> ENROLLED ON</th>
                                        <th scope="col">ACTION </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while($fetchEnrollmentRecord= mysqli_fetch_array($sql)){?>
                                    <tr>
                                        <td><?php echo $fetchEnrollmentRecord ['no'];?></td>
                                        <td><?php echo $fetchEnrollmentRecord ['fullname'];?></td>
                                        <td><?php echo $fetchEnrollmentRecord ['phonenumber'];?></td>
                                        <td><?php echo $fetchEnrollmentRecord ['email'];?></td>
                                        <td><?php echo $fetchEnrollmentRecord ['course'];?></td>
                                        <td><?php echo $fetchEnrollmentRecord ['gender'];?></td>
                                        <td><?php echo $fetchEnrollmentRecord ['created_at'];?></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-info btn-sm" href="view-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no']?>"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-danger btn-sm" href="delete-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no']?>"><i class="fa fa-trash"></i></a>
                                        
                                        
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
            

    <?php require_once ('includes/scripts.php') ?>
</body>
</html>