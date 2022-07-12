<?php
require_once('logics/dbConnection.php');

if (isset($_POST['updateEnrollment']))
    {
            //fetch form data

            $fullname =$_POST['fullname'];
            $phonenumber= $_POST['phone'];
            $email= $_POST['email'];
            $gender= $_POST['gender'];
            $course= $_POST['course'];

            $upadateRecords= mysqli_query($dBconn, "UPDATE enrollment set fullname= '$fullname', phonenumber ='$phonenumber', email='$email', gender= '$gender', course='$course' WHERE no='".$_GET['id']."'");

            if ($upadateRecords)
            {
                $message= "Records updated successfully";
            }

            else{
                $message= "Errpr occured while updating user";
            }
    }
?>