<head>
	<title>
			Payment
	</title>
	
<style>

html { background-image: linear-gradient(290deg, #a2f739, #80d7e8); }

	.payment_button{
					background-color:#4caf50;color:white;width:420px;height:32px;font-size:20;
					}
	.payment_button:hover{
								background-color:#087f23;
							}
	
</style>	
</head>
<body>

<center>
	
	<u><b><font style="font-size:50;"><br>Tickets</font></b></u><br><br><br>
<font style="font-size:20;"><b>Match:</b></font><br><br>
<?php

session_start();

$mysqli =new mysqli('localhost','root','','ipl') or die("f") ;
$db = mysqli_connect('localhost','root','','ipl');
$email = $_SESSION["email"];
    $result= $mysqli->query("SELECT * FROM registration WHERE email='".$email."'")or die("f");
    $row = $result->fetch_array();
    $r1 = $row['id'];

    $result1= $mysqli->query("SELECT * FROM seats WHERE r_id='".$r1."'")or die("f");
    $row1 = $result1->fetch_array();
    $s = $row1['section'];
    $q = $row1['quadrant'];
    $m = $row1['match_details'];
	
	/*sql="CALL getSeats($r1);";
	if($resultss=mysqli_query($db,$sql)){
		while($roww=mysqli_fetch_row($resultss)){
			print_r($roww[3]." ");
		}
	}
	else
		echo "<h1>db not connected</h1>";**/
	
	
echo $m." ";
?>
<br><br>
<font style="font-size:20;"><b>Section:</b></font><br><br>
<?php
//echo $s;
//$db = mysqli_connect('localhost','root','','ipl');
	$sql="CALL getSeats($r1);";
	if($resultss=mysqli_query($db,$sql)){
		$roww=mysqli_fetch_row($resultss);
		print_r($roww[1]." ");
	}
	else
	echo "<h1>db not connected</h1>";
?>
<br><br>
<font style="font-size:20;"><b>Quadrant:</b></font><br><br>
<?php
//echo $q;
$db = mysqli_connect('localhost','root','','ipl');
	$sql="CALL getSeats($r1);";
	if($resultss=mysqli_query($db,$sql)){
		$roww=mysqli_fetch_row($resultss);
		print_r($roww[2]." ");		
	}
	else
	echo "<h1>db not connected</h1>";
?>
<br><br>
<font style="font-size:20;"><b>Seats:</b></font><br><br>
<?php
    $result1= $mysqli->query("SELECT * FROM seats WHERE r_id='".$r1."'")or die("f");
    /*while($row1 = $result1->fetch_assoc())
    {
    echo $row1["seat"] . " ";
    }*/
	$db = mysqli_connect('localhost','root','','ipl');
	$sql="CALL getSeats($r1);";
	if($resultss=mysqli_query($db,$sql)){
		while($roww=mysqli_fetch_row($resultss)){
			print_r($roww[3]." ");
		}
	}
	else
	echo "<h1>db not connected</h1>";
//printf ("%s",$row1["seat"]);
?>
<br><br><br>
  <button name="Cancel" class="payment_button" value="Cancel" onclick="cancel()">Cancel Tickets</button>
	<script>
	function cancel()
	{
	alert("Tickets were successfully cancelled!");
	location.href="delete.php";
	}
	</script>	
	
	</center>
</body>
</html>
