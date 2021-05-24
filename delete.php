<?php

session_start();

$mysqli =new mysqli('localhost','root','','ipl') or die("f") ;
$db = mysqli_connect('localhost','root','','ipl');
$email = $_SESSION["email"];
    $result= $mysqli->query("SELECT * FROM registration WHERE email='".$email."'")or die("f");
    $row = $result->fetch_array();
    $r1 = $row['id'];

    $result1= $mysqli->query("DELETE FROM seats WHERE r_id='".$r1."'")or die("f");
    
header('location:ipl.php');    

?>    
