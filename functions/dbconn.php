<?php
$servername = "localhost";
$username = "root";
$pass = "";

$conn = new mysqli($servername, $username, $pass);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




