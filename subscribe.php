<?php 
require_once ('logics/dbConnection.php');

$subscribeus = mysqli_query ($dBconn, "SELECT * FROM subscribers");






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
                        <span>Subscribe Us Table</span>
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
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">SUBSCRIBED AT</th>
                                
                                    
                                </tr>
                            </thead>

                            <tbody>
                            <?php while($fetchmessage= mysqli_fetch_array($subscribeus)){?>
                                <tr>
                                    <td><?php echo $fetchmessage ['no'];?></td>
                                    <td><?php echo $fetchmessage ['email'];?></td>
                                    <td><?php echo $fetchmessage ['created_at'];?></td>
                                   

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