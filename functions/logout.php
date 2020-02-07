<?php
session_start();
session_destroy();
$_SESSION['user_id'] = "";
$_SESSION['user_name'] = "";
header("location: ../index.php");