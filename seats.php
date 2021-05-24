<?php

session_start();

$errors = array();
$mysqli =new mysqli('localhost','root','','ipl') or die("f") ;
$db = mysqli_connect('localhost','root','','ipl');
$email = $_SESSION["email"];
$match = $_SESSION['match'];
$section = mysqli_real_escape_string($db, $_POST['section']);
$quadrant = mysqli_real_escape_string($db, $_POST['quadrant']);;

    $result= $mysqli->query("SELECT * FROM registration WHERE email='".$email."'")or die("f");
    $row = $result->fetch_array();
    $r1 = $row['id'];

echo $quadrant;
echo $section;
$seats = $_POST['seats'];
foreach ($seats as $key => $value)
{
$query = "INSERT INTO seats(section, quadrant, seat, match_details, r_id) VALUES ('$section', '$quadrant', '$value', '$match', '$r1')";
mysqli_query($db,$query);
echo $value . "</br>";
}
$_SESSION['seats'] = $seats;
$_SESSION['section'] = $section;
$_SESSION['quadrant'] = $quadrant;
header('location:payment.php');
?>
