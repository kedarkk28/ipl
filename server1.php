<?php

session_start();

$first_name = "";
$last_name = "";
$seat_no = "";
$orders_list = "";

$errors = array();
$mysqli =new mysqli('localhost','root','','ipl') or die("f") ;
$db = mysqli_connect('localhost','root','','ipl');
$email = $_SESSION["email"];


//echo "Success connecting to the database";

$first_name = mysqli_real_escape_string($db, $_POST['first_name']);
$last_name = mysqli_real_escape_string($db, $_POST['last_name']);
$seat_no = mysqli_real_escape_string($db, $_POST['seat_no']);
$orders_list = mysqli_real_escape_string($db, $_POST['orders_list']);
 
    $result= $mysqli->query("SELECT * FROM registration WHERE email='".$email."'")or die("f");
    $row = $result->fetch_array();
    $r1 = $row['id'];

$query = "INSERT INTO orders(orders_list, r_id) VALUES ('$orders_list', '$r1')";

mysqli_query($db,$query);
header('location:ipl.php');

?>
