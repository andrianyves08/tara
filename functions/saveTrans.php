<?php
session_start();
include 'dbconn.php';
$activity = $_GET['act'];
$act = explode(",", $activity);
$message =  $_POST['msg'];
$user = $_SESSION['user_name'];
$venue = $_POST['venue'];
$ven = explode(",", $venue);
$date = $_POST['date'];
$time = $_POST['time'];
$crowd = $_POST['crowd'];
$age = $_SESSION['age'];

$qry = "INSERT INTO u982083468_nyangay.transactions (tara_transaction_user, tara_transaction_venue, tara_transaction_time, tara_transaction_date, tara_transaction_note, tara_transaction_activity, tara_transaction_crowd, tara_transaction_status, tara_transaction_age) VALUES ('$user','$ven[1]','$time','$date','$message','$act[1]','$crowd', 'Available', '$age')";


if($conn->query($qry) == TRUE){
    echo "Saved!";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location: ../guide.php?stat=1");




