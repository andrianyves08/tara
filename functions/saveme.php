<?php
include 'dbconn.php';

$venue = $_GET['id'];
$time = $_POST['time'];
$num = $_POST['number'];
$user = "";

$sql = "INSERT INTO tara.transactions (tara_transaction_user, tara_transaction_venue, tara_transaction_time, tara_transaction_buddy) VALUES(')";

