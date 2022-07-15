<?php
    require_once ('logics/dbConnection.php');

    $sqlDeleteStudent =mysqli_query($dBconn, "DELETE FROM contactus WHERE number= '".$_GET['id']."'");

    if ($sqlDeleteStudent)
    {
        echo "User Deleted successfully";
        header('location:contactus.php');
    }
    else {
        echo "Error occured. Pleese try again!";
    }



?>