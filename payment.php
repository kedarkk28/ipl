<html>
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
	
	<u><b><font style="font-size:50;">Checkout</font></b></u><br><br><br>
	<font style="font-size:20;"><b>Match Details:</b></font><br><br>
	<?php
session_start();
$seats1 = $_SESSION['seats'];
$match = $_SESSION['match'];
$section = $_SESSION['section'];
$quadrant = $_SESSION['quadrant'];

$i = 0;

echo $match;
?>
<br><br>
<font style="font-size:20;"><b>Seat(s) Selected:</b></font><br><br>

<?php

echo $section . " - " . $quadrant . "     ";
foreach ($seats1 as $key => $value)
{

echo $value . "  ";
$i++;
}

?>
<br><br>

<font style="font-size:20;"><b>Total Price  =  <?php echo $i*750;?></b></font><br><br>
<font style="font-size:30;"><b>Accepted Cards</b></font><br><br>
<img src="visa.png" width="100"></img>
<img src="mastercard.jpg" width="103"></img>
<img src="rupay.png" width="107"></img>

	
	<form method="post" action="pay.php" id="form">
		

		<table align=center border = "0" cellpadding="20" style='font-size:150%'>
<br>
			<tr>
				<td>Name on Card:</td>
				<td><input style="height:30px" type="text" placeholder="ABC XYZ" name="name" required></td>
			</tr>
			
			<tr>
				<td>Credit card number:</td>
				<td><input style="height:30px" type="numeric" maxlength="19" name="ccno" placeholder="1111-2222-3333-4444" required></td>
			<tr>
				<td>Exp Month & Year:</td>
				<td>
				<select style="height:30px" id="month" name="month" required>
					<option value="month" required>Month</option>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
				</select>
				</td>
				
				<td>
				<input style="height:30px" type="numeric" maxlength="4" name="year" placeholder="e.g. 2001" required>
				</td>
				
			</tr>
			
			<tr>
				<td>CVV:</td>
				<td><input style="height:30px" type="numeric" maxlength="3" name="cvv" placeholder="111" required></td>
			</tr>
			
			
			
		</table>
		</font>
	<p>
                    <button type="submit"  name="Pay" class="payment_button" value="Pay" onclick="pay()">Pay</button>
            </p>
	<script>
	function pay()
	{
	alert("Payment was successfull!");
	}
	</script>
	</form>
	</center>
</body>
</html>
