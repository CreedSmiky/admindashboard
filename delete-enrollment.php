<?php
    require_once ('logics/dbConnection.php');

    $sqlDeleteStudent =mysqli_query($dBconn, "DELETE FROM enrollment WHERE no= '".$_GET['id']."'");

    if ($sqlDeleteStudent)
    {
        echo "User Deleted successfully";
        header('location:students.php');
    }
    else {
        echo "Error occured. Pleese try again!";
    }



?>