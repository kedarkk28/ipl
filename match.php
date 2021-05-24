<?php
session_start();
$match = $_POST['match'];
echo $match;
$_SESSION['match'] = $match;
//echo $_SESSION['match'];
header('location:seat-booking.php');
?>
