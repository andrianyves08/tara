<?php
$servername = "localhost";
$username = "u982083468_nyangay";
$pass = "J@vasolutions";

$conn = new mysqli($servername, $username, $pass);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




