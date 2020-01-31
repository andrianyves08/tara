<?php
include 'dbconn.php';
$user = $_POST['username'];
$last = $_POST['lastname'];
$first = $_POST['firstname'];
$pass = md5($_POST['password']);
$dob =  $_POST['dob'];
$addr = $_POST['address'];
$email =$_POST['email'];

echo $user, $last, $first, $pass, $dob, $addr;

$sql = "INSERT INTO tara.members (tara_username, tara_last_name, tara_first_name, tara_dob, tara_address, tara_email, tara_password) VALUES ('$user', '$last', '$first', '$dob', '$addr', '$email', '$pass')";

if($conn->query($sql) == TRUE){
    echo "Registered successfully!";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location: ../index.php");