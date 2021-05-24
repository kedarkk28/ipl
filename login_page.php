<?php 
session_start();
$con = mysqli_connect('localhost','root','','ipl');
?>
<!doctype html>

<html>
	<head>
<style>
body {
  background-image: url("back_login.jpg");
}
.login_heading{text-shadow:0.5px 3px #D8D8D8;text-decoration:overline;}
.create_account_link{text-shadow:0.5px 2px #888888;}

<!--Sticky-->
	.sticky{
			position:sticky;
			width:100%;
			top:0;
			margin:0;
			padding:0px;
			overflow:hidden;
			background-color:#C8C8C8;
			}
	.sticky a{
		font: menu;
		text-decoration:none;
		font-size: 18px;
		box-sizing: border-box;
		float:center;
		display:inline-block;
		color:#50000;
		text-align:center;
		padding: 16px 24px;
		}
		
	.sticky a:hover{background:#C0C0C0;
					color:black;}
					
	.logo{float:left;margin:39px;}
</style>
	</head>

<body>
<div class="sticky">
	<!--a href="Not_Able_to_LOGIN.html" target="blank"><abbr title="NOT ABLE TO LOGIN">NOT ABLE TO LOGIN</abbr></a>	
	<a href="contact_us.html" target="blank">Contact-us</a-->
	<a href="index.html" target="blank">Admin Login</a>
</div>
	<div class="logo"><img src="logo.png"></img></div><br><br><br><br><br><br><br><br><br>
	<br><br>	<br><br>
	<form action="login_check.php" method="POST"><br><br><br><br><br>
			<fieldset style="border:3px solid blue;">
				<legend align="left"><h2 class="login_heading" ><font color="yellow"><b><u>IPL </u></b></font><u><font color="blue">OFFICIAL Login</font></u></h2></legend>
				<table align=center>
					<tr>
					<td><b>Username:</b></td>
					<td><input type="email" name="email" placeholder="Username" required >
					</tr>
				
					<tr>
					<td><b>Password:</b></td>
					<td><input type="password" name="password" placeholder="Password" required >
					</tr>
				
					<tr>
					<td><input type="submit" class="btn btn-success" name="submit" value="Login">
					<td><a href="create.php" class="create_account_link">Create New Account</a>
					</tr>
				</table>
			</fieldset>
	</form>
</body>
</html>
