<?php 
$server="localhost";
$username="root";
$password= "";
$database="zalego";

$dBconn=mysqli_connect($server, $username, $password, $database);

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
    <div class="header">
        <img src="images/zalego.jfif" alt="image" class="image">
        <a href="#" class="navbar-trigger"><span></span></a>

    </div>

    <div class="side-bar">
        <nav>
            <ul>
                <li>
                    <a href="">
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
                        <span>Students Table</span>
                    </div>
                   
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive">
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
                                        <a class="btn btn-primary btn-sm" href="#"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-info btn-sm" href="#"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-danger btn-sm" href="#"><i class="fa fa-trash"></i></a>
                                    
                                    
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
            


</body>
</html>