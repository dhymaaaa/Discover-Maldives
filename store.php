<?php
include('db_connection.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$rating = $_POST['rating'];
$concern = $_POST['concern'];

$query = mysqli_query($con, "INSERT INTO feedback (
fname,
lname,
rating,
concern) VALUES (
'$fname',
'$lname',
'$rating',
'$concern')");

header('location:index.php');
?>