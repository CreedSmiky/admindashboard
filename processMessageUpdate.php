<?php
require_once('logics/dbConnection.php');

if (isset($_POST['updateEnrollment']))
    {
            //fetch form data

            $firstname=$fetchmessage['firstname'];
            $phonenumber=$fetchmessage['phonenumber'];
            $email=$fetchmessage['email'];
            $messages= $fetchmessage['message'];

            $upadateRecords= mysqli_query($dBconn, "UPDATE contactus set firstname= '$firstname', phonenumber ='$phonenumber', email='$email' WHERE number='".$_GET['id']."'");

            if ($upadateRecords)
            {
                $message= "Records updated successfully";
               
            }

            else{
                $message= "Errpr occured while updating user";
            }
    }
?>