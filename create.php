<?php 
session_start();
$con = mysqli_connect('localhost','root','','ipl');
?>
<!doctype html>
<html>
<head>
<script type="text/javascript">

function checking_mob(input){
	let num = /[^0-9]/gi;
	input.value=input.value.replace(num,"");
}

function checking_aadhar(input){
	let num = /[^0-9]/gi;
	input.value=input.value.replace(num,"");
}

function checking_pin(input){
	let num = /[^0-9]/gi;
	input.value=input.value.replace(num,"");
}

function checking_passport(input){
	let num = /[^0-9]/gi;
	input.value=input.value.replace(num,"");
}

function recheck_mobileNo(){
	let mob_no=document.getElementById("mobNo").value;
if(mob_no.length==10){
	if(mob_no[0]<=9 && mob_no[0]>=7){
		document.getElementById("error_for_mobile").innerHTML="Valid**";
		document.getElementById("error_for_mobile").style.color="green";
	}
	else{
		document.getElementById("error_for_mobile").innerHTML = "Invalid**";
		document.getElementById("error_for_mobile").style.color = "red";
	}
}
else{
	document.getElementById("error_for_mobile").innerHTML = "MobNo length should be between 0-10**";
	document.getElementById("error_for_mobile").style.color="red";
}
}
function recheck_pin(){
	let ppin=document.getElementById("pin_code").value;
	if(ppin.length==6){
		document.getElementById("error_for_pin").innerHTML="Valid**";
		document.getElementById("error_for_pin").style.color="green";
	}
	else{
		document.getElementById("error_for_pin").innerHTML = "Invalid**";
		document.getElementById("error_for_pin").style.color = "red";
	}
}

function recheck_passsport(input){
	let pass=document.getElementById("passport_no").value;
	if(pass.length==9 || pass=="0000"){
		document.getElementById("error_for_passport").innerHTML="Valid**";
		document.getElementById("error_for_passport").style.color="green";
	}
	else{
		document.getElementById("error_for_passport").innerHTML = "Invalid**";
		document.getElementById("error_for_passport").style.color = "red";
	}
}
function recheck_aadhar(){
	let aadhar_no=document.getElementById("aadhar").value;
	if(aadhar_no.length==12 || aadhar_no=="0000"){
		document.getElementById("error_for_aadhar").innerHTML="Valid**";
		document.getElementById("error_for_aadhar").style.color="green";
	}
	else{
		document.getElementById("error_for_aadhar").innerHTML = "Invalid**";
		document.getElementById("error_for_aadhar").style.color = "red";
	}
}
function validating(){
	recheck_mobileNo();
	recheck_pin();
	recheck_passsport();
	recheck_aadhar();
let pass1=document.getElementById("pass").value;
let pass2=document.getElementById("confirm_pass").value;

if(pass1.length>8 && pass2.length<25){
if(pass1!=pass2){
	document.getElementById("error_for_password").innerHTML="Password not matching**";
	document.getElementById("error_for_password").style.color="red";
	return false;
}
else{
	document.getElementById("error_for_password").innerHTML="All Good**";
	document.getElementById("error_for_password").style.color="green";
	return true;
}
}
else{
	document.getElementById("error_for_password").innerHTML="Password length should be in between 8-25**";
	document.getElementById("error_for_password").style.color="red";
	return false;
}

}
</script>
	<title>
		Create Account
	</title>
	<style>
body{
	color:white;
background-image:url(back_create_account.jpg);
background-size:cover;
position:center;}
*{font-weight:bolder;}
#create_account_button{background-color:blue;text-align:center;padding:12px 20px;color:white;}

.name_class.error input{
	border-color:red;
}
.container{
	border-radius:50px;
}
</style>
</head>
<body>
	<form action="server.php" method="post" id="form" >
	<fieldset class="container">
	<div >
	<center><img src="logo.png"></img></center><br>
		<legend align=center style="font-color:purple;"><u><h2>Create Account:</h2></u></legend>
		<table align=center class="container">
			<tr class="name_class">
				<td>Enter Name:</td>
				<td><input type="text" id="name" name="name" required></td>
			</tr>
			
			<tr>
				<td>Select D.O.B:</td>
				<td><input type="date" id="dob" name="dob" required></td>
			</tr>
			<tr>
				<td>Mob_no:</td>
				<td><input type="text" id="mobNo" name="mobile" placeholder="Enter your 10 digit Mob_no." onkeyup="checking_mob(this)" required></td>
				<td><span id="error_for_mobile" style="background-color:white;"></span><td>
			</tr>
			
			<tr>
				<td>Email:</td>
				<td><input type="email" id="email" name="email" required></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="password" required></td>
				<td><span id="error_for_password" style="background-color:white;"></span><td>
			</tr>
			<tr>
				<td>Enter-Pass-Again :</td>
				<td><input type="password" id="confirm_pass" required></td>
			</tr>			
			<tr>
				<td>Gender:</td>
				<td><input type="radio" name="gender" value="m" required>Male
					<input type="radio" name="gender" value="f" required>Female
					<input type="radio" name="gender" value="o" required>Other</td>	
			</tr>
			
			<tr>
				<td>Address:</td>
				<td><textarea id="address" name="address" rows="4" col="9" required></textarea></td>
			</tr>
		
			<tr>
				<td>Enter Pin-Code:</td>
				<td><input type="tel" id="pin_code" onkeyup="checking_pin(this)" name="pin" placeholder="pin" required>
				<td><span id="error_for_pin" style="background-color:white;"></span><td>
			</tr>	
			

			<tr>
				<td>Country:</td>
				<td><input list="country" id="country" name="country" required></td>
					<datalist id="country" required>
					<option value="India">INDIA</option>
					<option value="USA">USA</option>
					<option value="Germany">Germany</option>
					</datalist></td>
			</tr>			
			<tr>
				<td>State:</td>
				<td><select id="state" name="state" required>
					<option value="state" required>State</option>
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
				<td><select id="city" name="city" required>
					<option value="City" required>City</option>		
					<option value="Pune">Pune</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Ahmadnagar">Ahmadnagar</option>
					<option value="Nagpur">Nagpur</option>
					<option value="Nashik">Nashik</option>
				</select>	</td>
			</tr>
			
			<tr>
				<td>PASSPORT NO:</td>
				<td><input type="text" id="passport_no" name="passport" onkeyup="checking_passport(this)" placeholder="If not then type 0000" required></td>
				<td><span id="error_for_passport" style="background-color:white;"></span><td>
			</tr>

			<tr>
				<td>UNIQUE ID NO:(AADHAAR)</td>
				<td><input type="text" name="aadhar" id="aadhar" onkeyup="checking_aadhar(this)" placeholder="If not then type 0000" required></td>
				<td><span id="error_for_aadhar" style="background-color:white;"></span><td>
			</tr>
		<tr><td><br><td><input type="button" onclick="validating()" value="Verify All Fields"></td></td></tr>
			<tr><td><br><br><br></td>
				<td><input type="submit" onclick="message_box()" value="Create New Account" ></a>
				<input type="reset" value="Reset" style="font-color:black"></td>
			</tr>
		</table>
		</div>
	</fieldset>
</form>
</body>
</head>
</html>
