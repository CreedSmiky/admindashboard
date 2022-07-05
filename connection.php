<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

// connections

$dBconn=mysqli_connect($server, $username, $password, $database);

if ($dBconn)
{
    echo "Database connection success";
}
else{
    echo "Error occured";
}

if (!$dBconn) {
    die ("No connection" .mysqli_connect_error());
}

?>