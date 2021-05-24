<?php

$SendingId=
$db = mysqli_connect('localhost','root','','ipl');
	$sqlx="CALL getEmailAndName($SendingId);";
	if($resultss=mysqli_query($db,$sqlx)){
		print_r($roww);
		echo "<pre>";
		}
	
	else
	echo "<h1>db not connected</h1>";
?>