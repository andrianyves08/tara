<?php
include 'dbconn.php';
session_start();

$user = $_SESSION['user_id'];
$who = $_GET['who'];
$tact = $_GET['tact'];

echo $who;
$qry = "SELECT * FROM u982083468_nyangay.transactions WHERE tara_transaction_id = ".$tact;

$resulter = $conn->query($qry);
    while($row = $resulter->fetch_assoc()) {
        if($row['tara_transaction_status'] == 'Available'){
            $sql = "UPDATE u982083468_nyangay.transactions SET tara_transaction_status='unavail', tara_transaction_buddy = '$who' WHERE tara_transaction_id=".$tact;

        if (mysqli_query($conn, $sql)) {
            header("location: ../guide.php?stat=3");
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
        }else{
            echo "Not available";
        }
    }
    
 