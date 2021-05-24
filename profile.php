<html>
    <head>
        <title>Profile</title>
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
    <?php

session_start();

$mysqli =new mysqli('localhost','root','','ipl') or die("f") ;
$db = mysqli_connect('localhost','root','','ipl');
$email = $_SESSION["email"];
    $result= $mysqli->query("SELECT * FROM registration WHERE email='".$email."'")or die("f");
    $row = $result->fetch_array();
    $r1 = $row['id'];

?>

        <form action="update.php" method="post" id="form" >
	<fieldset class="container">
	<div >
	<center><img src="user.png" width="300" height="250"></img></center>
		<legend align=center style="font-color:purple;"><u><h2>PROFILE:</h2></u></legend>
		<table align=center class="container">
			<tr class="name_class">
				<td>Enter Name:</td>
				<td><input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"></td>
			</tr>
			
			<tr>
				<td>Select D.O.B:</td>
				<td><input type="date" id="dob" name="dob" value="<?php echo $row['dob']; ?>"></td>
			</tr>
			<tr>
				<td>Mob_no:</td>
				<td><input type="text" id="mobNo" name="mobile" placeholder="Enter your 10 digit Mob_no." onkeyup="checking_mob(this)" value="<?php echo $row['mobile']; ?>"></td>
			</tr>
			
			<!--tr>
				<td>Email:</td>
				<td><input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"></td>
			</tr-->
			<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="password" value="<?php echo $row['password']; ?>"></td>

			</tr>
			<!--tr>
				<td>Enter-Pass-Again :</td>
				<td><input type="password" id="confirm_pass" required></td>
			</tr>			
			<tr>
				<td>Gender:</td>
				<td><input type="radio" name="gender" value="m" required>Male
					<input type="radio" name="gender" value="f" required>Female
					<input type="radio" name="gender" value="o" required>Other</td>	
			</tr-->
			
			<tr>
				<td>Address:</td>
				<td><textarea id="address" name="address" rows="2" col="9" value="<?php echo $row['address'];?>"></textarea></td>
			</tr>
		
			<tr>
				<td>Enter Pin-Code:</td>
				<td><input type="tel" id="pin_code" onkeyup="checking_pin(this)" name="pin" placeholder="pin" value="<?php echo $row['pin']; ?>">

			</tr>	
			

			<tr>
				<td>Country:</td>
				<td><input list="country" id="country" name="country" value="<?php echo $row['country']; ?>"></td>
					<datalist id="country" >
					<option value="India">INDIA</option>
					<option value="USA">USA</option>
					<option value="Germany">Germany</option>
					</datalist></td>
			</tr>			
			<tr>
				<td>State:</td>
				<td><select id="state" name="state" value="<?php echo $row['state']; ?>">
					<option value="MH">MH</option>
					<option value="Delhi">Delhi</option>
					<option value="M.P">M.P</option>
					<option value="U.P">U.P</option>
					<option value="Telangana">Telangana</option>
					<option value="Kerala">Kerala</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Odisha">Odisha</option>
					<option value="Rajasthan">Rajasthan</option>
				</select>	</td>
			</tr>
			
			<tr>
				<td>City:</td>
				<td><select id="city" name="city" value="<?php echo $row['city']; ?>">
					<option value="Pune">Pune</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Ahmadnagar">Ahmadnagar</option>
					<option value="Nagpur">Nagpur</option>
					<option value="Nashik">Nashik</option>
				</select>	</td>
			</tr>
			
			<tr>
				<td>PASSPORT NO:</td>
				<td><input type="text" id="passport_no" name="passport" placeholder="If not then type 0000" value="<?php echo $row['passport']; ?>"></td>

			</tr>

			<tr>
				<td>UNIQUE ID NO:(AADHAAR)</td>
				<td><input type="text" name="aadhar" id="aadhar" placeholder="If not then type 0000" value="<?php echo $row['aadhar']; ?>"></td>

			
		<tr><!--td><br><td><input type="button" onclick="validating()" value="Verify All Fields"></td></td></tr>
			<tr><td><br><br><br></td-->


			
		</table>
		</div>
						<center><input type="submit" value="Update" >
						<br>
						<a href="ipl.php">Back to home</a>
						</center>
	</fieldset>
</form>
</body>
</head>
</html>
