<?php

$dbhost="localhost";
$dbusername="root";
$dbpass="";
$dbname="exam";

$conn=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

if($conn->connect_error){
    die("error in connection".$conn->connect_error);
}

?>