<?php
include "dbconn.php";
$id = $_GET['id'];

$qry = "DELETE FROM u982083468_nyangay.transactions WHERE tara_transaction_id = $id";

if ($conn->query($qry) === TRUE) {
    $conn->close();
    header("location: ../guide.php?stat=2");
} else {
    echo "Error deleting record: " . $conn->error;
}