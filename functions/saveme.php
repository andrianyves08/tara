<?php
session_start();
include 'dbconn.php';

$username = $_POST['username'];
$pass = md5($_POST['password']);


$qry = "SELECT * FROM u982083468_nyangay.members WHERE tara_username = '$username' AND tara_password = '$pass'";
$result = $conn->query($qry);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $bday = $row['tara_dob'];
        $age = explode("-", $bday);
        $filter = 2020-$age[0];
        $_SESSION['age'] = $filter;
        echo $_SESSION['age'];
        echo "id: " . $row["tara_user_id"]. " - Name: " . $row["tara_username"]. " - Password: " . $row["tara_password"]. "<br>";
        $_SESSION['user_id'] = $row["tara_user_id"];
        $_SESSION['user_name'] = $row['tara_username'];
        header("location: ../index.php");
    }
} else {
    header("location: ../index.php?logstat=1");
}
$conn->close();