<?php 
$servername="localhost";
$username="root";
$password="";
$db="discover_maldives";

$con= new mysqli($servername, $username, $password, $db);

if($con->connect_error){
    die("connection failed:" .$con->connect_error);
}
echo "<script> console.log('connected sucessfully')</script>";
