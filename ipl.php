<?php
session_start();
if (!isset($_SESSION['email'])) {
	header('location:login_page.php');
}
?>

<!doctype html>
<html>

<head>
	<title>
		IPL TICKETING
	</title>

	<style>
		body {
			background-image: url(captains.jpg);
			background-size: cover;
			background-position: center center;
			height: 100vh;
		}
		
		.displayingTeams{
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}

		nav {
			background-color: #A80000;
			height: auto;
		}

		nav ul {
			border: 1px solid red;
			height: 65px;
			margin: 0 auto;
		}

		nav ul li {
			list-style-type: none;
			width: 180px;
			float: left;
			border-right: 1px solid #CCC;
			text-align: center;
		}

		nav ul li a {
			text-decoration: none;
			color: white;
			line-height: 45px;
			display: block;
		}

		li a:hover {
			background-color: #600000;
		}

		#match_table {
			color: white;
			text-align: center;
			font-weight: bolder;
			overflow: auto;
			border-collapse: collapse;
		}

		#Teams_Playing_heading {
			font-family: Blackadder ITC Regular;
			text-align: center;
			color: white;
			font-size: 39px;
			font-weight: bolder;
		}

		#main_heading {
			font-style: oblique;
			font-family: Harlow Solid Semi Expanded Italic;
			text-decoration: overline;
			text-shadow: 0.5px 3px #D8D8D8;
		}

		#Teams_playing {
			background-image: url("captions.jpg");
			outline-style: solid;
			outline-color: black;
			outline-width: thick;
			outline-offset: 10px;
			padding: 10px;
			margin: 10px;
		}

		h4 {
			animation-duration: 1s;
			animation-name: blink;
			animation-iteration-count: infinite;
			animation-direction: alternate;
		}

		@keyframes blink {
			from {
				opacity: 1;
			}

			to {
				opacity: 0;
			}
		}

		.stick {
			list-style-type: none;
			width: 100%;
			top: 0;
			margin: 0;
			padding: 0px;
			overflow: hidden;
			background-color: yellow;
		}

		.stick a {
			font: menu;
			text-decoration: none;
			font-size: 18px;
			box-sizing: border-box;
			display: inline-block;
			color: black;
			text-align: center;
			padding: 16px 24px;
		}

		.sticky a:hover {
			background: #C0C0C0;
			color: black;
		}

		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: lightgray;
		}

		li {
			float: left;
			list-style-type: none;
		}

		li a,
		.dropbtn {
			display: inline-block;
			color: black;
			font-size: 22px;
			text-align: center;
			padding: 10px 20px;
			text-decoration: none;
		}

		li a:hover,
		dropdown:hover .dropbtn {
			background-color: lightblue;
			color: black;
		}

		.food_domain {
			display: none;
			position: absolute;
			background-color: orange;
			color: black;
			min-width: 150px;
			box-shadow: 5px 8px 10px 0px black;
		}

		.food_domain a {
			color: black;
			padding: 10px 15px;
			text-decoration: none;
			display: block;
			text-align: left;
		}

		.food_domain a:hover {
			background-color: gray;
			color: white;
		}

		.dropdown:hover .food_domain {
			display: block;
		}

		img {
			opacity: 0.8;
		}

		img:hover {
			opacity: 0.2;
		}

		img {
			border-radius: 35%
		}

		.offer_link a:hover {
			font-style: oblique;
			text-decoration: underline;
		}

		.csk_class {
			border: 4px solid yellow;
			background-color: white;
			border-radius: 25% 10%;
			width: 30%;
			height: 200px;
			padding: center;
			margin: 10px;
			background-image: linear-gradient(yellow, white);
		}


		.mm_class {
			border: 4px solid blue;
			background-color: white;
			border-radius: 25% 10%;
			width: 30%;
			height: 200px;
			padding-bottom: center;
			background-image: linear-gradient(blue, white);
			margin: 10px;
		}

		.kk_class {
			border: 4px solid purple;
			background-color: white;
			float: left;
			border-radius: 25% 10%;
			width: 30%;
			height: 200px;
			padding-bottom: center;
			margin: 10px;
			background-image: linear-gradient(purple, white)
		}

		.sr_class {
			border: 4px solid orange;
			background-color: white;
			float: left;
			border-radius: 25% 10%;
			width: 30%;
			height: 200px;
			padding-bottom: center;
			margin: 10px;
			background-image: linear-gradient(orange, white)
		}

		.rr_class {
			border: 4px solid blue;
			margin: 10px;
			background-color: white;
			float: left;
			border-radius: 25% 10%;
			width: 30%;
			height: 200px;
			padding-bottom: center;
			background-image: linear-gradient(blue, white)
		}

		.k_11_p_class {
			border: 4px solid red;
			background-color: white;
			float: left;
			border-radius: 25% 10%;
			width: 30%;
			height: 200px;
			margin: 10px;
			;
			padding-bottom: center;
			background-image: linear-gradient(red, white)
		}

		.rcb_class {
			border: 4px solid red;
			background-color: white;
			float: left;
			border-radius: 25% 10%;
			width: 30%;
			height: 200px;
			margin: 10px;
			;
			padding-bottom: center;
			background-image: linear-gradient(red, white)
		}

		.dd_class {
			border: 4px solid blue;
			background-color: white;
			float: left;
			border-radius: 25% 10%;
			width: 30%;
			height: 200px;
			padding-bottom: center;
			background-image: linear-gradient(blue, white);
			margin: 10px;
		}

		tr:nth-child(even) {
			background-color: gray
		}

		tr:nth-child(odd) {
			background-color: red
		}

		.buttons {
			float: center;
		}

		.bill {
			float: right;
			width: 210px;
			height: 75px;
			padding: 15px 20px;
			margin: 10px;
			box-sizing: border-box;
			border: 2px solid black;
			border-radius: 3px;
			background-color: yellow;
			color: black;
		}
	</style>
</head>

<body style="background-color:orange" alink="green">
	<center>
		<h2><b>
				<font color=red>You are logged in as<u>
						<?php echo $_SESSION['email'] ?></u></font><b></h3>
	</center>
	<div class="stick">
		<ul>
		<font color=black>
			<li><a href="login_page.php">Login Again</a></li>
			<li><a href="https://en.wikipedia.org/wiki/Indian_Premier_League" target="blank">About-us</a>
			<li><a href="lase.php">Food orders</a></li>
			<li><a href="tickets.php">Your Tickets</a></li>
			<li><a href="login_page.php">Logout</a></li>
			<li><a href="profile.php">Profile</a></li>
			</font>
		</ul>
	</div>
	<br><br><br><br>
	<center><img src="logo.png" style="cursor:grab;"></center>

	<center>
		<h1 id="main_heading"><u><b>
					<font color=blue>OFFICIAL </font> </u>
			<font color=yellow><abbr title="INDIAN PREMIER LEAGUE"><u>IPL</u></abbr></font>
			<font color=blue> <u>TICKETING 2020</u></font></b>
		</h1>
	</center>
	<hr />

	<span class="offer_link">
		<a href="lucky_offer.html"><abbr title="Terms&Conditions_Apply*">
				<marquee loop="4">
					<h4 id="offer_blink">LUCKY OFFER::CLICK HERE</h4>
				</marquee>
			</abbr></a>
	</span>
	<h3 id="Teams_Playing_heading"><u>
			<font color=yellow>Teams Playing:</font>
		</u></h3><br>
		<div class="displayingTeams">
		<div class="csk_class" style="color:white;font-family:Algerian Regular;text-align:center;">Chennai Super Kings : 3<img src="csk.jpg" height="180" width="180"></div>
			<div class="mm_class" style="color:white;font-family:Algerian Regular;text-align:center;background-color:white;">Mumbai Indians : 4<img src="mi.jpg" height="180" width="180"></div>
			<div class="kk_class" style="color:white;font-family:Algerian Regular;text-align:center;background-color:white;">Kolkata Knight Riders : 2<img src="kr.jfif" height="180" width="180"></div>
			<div class="sr_class" style="color:white;font-family:Algerian Regular;text-align:center;background-color:white;">Sunrisers Hyderabad : 1<img src="sh.jfif" height="180" width="180"></div>
			<div class="rr_class" style="color:white;font-family:Algerian Regular;text-align:center;background-color:white;">Rajasthan Royals : 1<img src="rr.png" height="180" width="180"></div>
			<div class="k_11_p_class" style="color:white;font-family:Algerian Regular;text-align:center;background-color:white;">Kings XI Punjab<img src="k11punjab.jfif" height="180" width="180"></div>
			<div class="rcb_class" style="color:white;font-family:Algerian Regular;text-align:center;background-color:white;">R.C.B<img src="rcb.jfif" height="180" width="180"></div>
			<div class="dd_class" style="color:white;font-family:Algerian Regular;text-align:center;background-color:white;">Delhi Capitals<img src="dc.jpg" height="180" width="180"></div>
			</div>

	<div id="playing_teams" style="color:white;font-family:Algerian Regular;font-size:29px;text-align:center"><b>Captains for 2020:</b>
		<p style="text-align:center;">
			Chennai Super Kings: MS DHONI<br>
			Mumbai Indians: ROHIT SHARMA<br>
			Kolkata Knight Riders: DINESH KARTIK<br>
			Sunrisers Hyderabad: KANE WILLIAMSON<br>
			Rajasthan Royals: STEVEN SMITH<br>
			Kings XI Punjab: KL RAHUL<br>
			RCB: VIRAT KOHLI<br>
			Delhi Capitals: SHREYAS IYER<br>
		</p>
	</div>
	<p id="match_table_second_name">
		<div style="overflow-y:auto;">
<form method="post" action="match.php">
			<table id="match_table" align=center border="2" bgcolor="blue" cellpadding="22" cellspacing="8" width="700px" height="450" style="overflow:auto;">
				<caption>
					<h2 style="font-family:Cooper Black;"><u>Matches Sheduled</u></h2>
				</caption>
				<tr>
					<th><b><u>Date:</u></b></th>
					<th><b><u>Match:</u></b></th>
					<th><b><u>Location(city):</u></b></th>
					<th><b><u>SELECT TO ENJOY:</u></b></th>
				</tr>

				<tr>
					<td>Sept 19</td>
					<td>MI vs CSK</td>
					<td>Kolkata</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Sept 19  Match: MI vs CSK  Location: Kolkata"></td>
				</tr>

				<tr>
					<td>Sept 20</td>
					<td>DC vs K11P</td>
					<td>New Delhi</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Sept 20  Match: DC vs K11P  Location: New Delhi"></td>
				</tr>

				<tr>
					<td>Sept 21</td>
					<td>SH vs RCB</td>
					<td>Chennai</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Sept 21  Match: SH vs RCB  Location: Chennai"></td>
				</tr>

				<tr>
					<td>Sept 22</td>
					<td>RR vs CSK</td>
					<td>Mumbai</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Sept 21  Match: RR vs CSK  Location: Mumbai"></td>
				</tr>

				<tr>
					<td>Sept 23</td>
					<td>KKR vs MI</td>
					<td>Bengaluru</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Sept 23  Match: KKR vs MI  Location: Bengaluru"></td>
				</tr>

				<tr>
					<td>Sept 24</td>
					<td>K11P vs RCB</td>
					<td>Kanpur</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Sept 24  Match: K11P vs RCB  Location: Kanpur"></td>
				</tr>

				<tr>
					<td>Sept 25</td>
					<td>CSK vs DC</td>
					<td>Mumbai</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Sept 25  Match: CSK vs DC  Location: Mumbai"></td>
				</tr>

				<tr>
					<td>Sept 26</td>
					<td>KKR vs SH</td>
					<td>Ranchi</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Sept 26  Match: KKR vs SH  Location: Ranchi"></td>
				</tr>

				<tr>
					<td>Sept 27</td>
					<td>RR vs K11P</td>
					<td>Thiruvananthapuram</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Sept 27  Match: RR vs K11P  Location: Thiruvananthapuram"></td>
				</tr>

				<tr>
					<td>Sept 28</td>
					<td>RCB vs MI</td>
					<td>Indore</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Sept 28  Match: RCB vs MI  Location: Indore"></td>
				</tr>

				<tr>
					<td>Sept 29</td>
					<td>DC vs SH</td>
					<td>Cuttack</td>
					<td>
						<input type="radio" class="radioForMatch" name="match" value="Date: Sept 29  Match: DC vs SH  Location: Cuttack">
					</td>
				</tr>

				<tr>
					<td>Sept 30</td>
					<td>RR vs KKR</td>
					<td>Barabari</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Sept 30  Match: RR vs KKR  Location: Barabari"></td>
				</tr>

				<tr>
					<td>Oct 1</td>
					<td>K11P vs MI</td>
					<td>Visakhapatnam</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Oct 1  Match: K11P vs MI  Location: Visakhapatnam"></td>
				</tr>
				<tr>
					<td>Oct 2</td>
					<td>CSK vs SH</td>
					<td>Holkar.S</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Oct 2  Match: CSK vs SH  Location: Holkar.S"></td>
				</tr>

				<tr>
					<td>Oct 3</td>
					<td>RCB vs RR</td>
					<td>Pune</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Oct 3  Match: RCB vs RR  Location: Pune"></td>
				</tr>
				<tr>
					<td>Oct 4</td>
					<td>MI vs SH</td>
					<td>Rajkot</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Oct 4  Match: MI vs SH  Location: Rajkot"></td>
				</tr>

				<tr>
					<td>Oct 5</td>
					<td>RCB vs DC</td>
					<td>Lucknow</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Oct 5  Match: RCB vs DC  Location: Lucknow"></td>
				</tr>

				<tr>
					<td>Oct 6</td>
					<td>MI vs RR</td>
					<td>Ranchi</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Oct 6  Match: MI vs RR  Location: Ranchi"></td>
				</tr>

				<tr>
					<td>Oct 7</td>
					<td>KKR vs CSK</td>
					<td>Dehradum</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Oct 7  Match: KKR vs CSK  Location: Dehradum"></td>
				</tr>

				<tr>
					<td>Oct 8</td>
					<td>SH vs K11P</td>
					<td>Lucknow</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Oct 8  Match: SH vs K11P  Location: Lucknow"></td>
				</tr>

				<tr>
					<td>Oct 9</td>
					<td>RR vs DC</td>
					<td>Greater Noida</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Oct 9  Match: RR vs DC  Location: Greater Noida"></td>
				</tr>

				<tr>
					<td>Oct 10</td>
					<td>CSK vs RCB</td>
					<td>Guwahati</td>
					<td><input type="radio" class="radioForMatch" name="match" value="Date: Oct 10  Match: CSK vs RCB  Location: Greater Noida"></td>
				</tr>
				
			</table>
			<center><input type="submit" name="submit" value="Select Match"/></center>
			</form>
		</div>
	</p>
	<center><img src="ipl_teams.jpg" alt="Temporary Unavailable"></img></center>
	<h5 style="text-align:center"><a href="feedback.html">FEEDBACK</a></h5>
</body>


</html>
