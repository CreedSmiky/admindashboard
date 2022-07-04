<?php 
$server="localhost";
$username="root";
$password= "";
$database="zalego";

$dBconn=mysqli_connect($server, $username, $password, $database);

$sql = mysqli_query($dBconn, "SELECT * FROM enrollment");

while ($fetchRecords = mysqli_fetch_array($sql)) {

    echo $fetchRecords ['fullname'] . '<br>' . $fetchRecords ['phonenumber'] . '<br>'. $fetchRecords ['email'];
   
}









?>