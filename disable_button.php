<html>
	
	<script>
		
		function enable_link()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "disable.php", true);
			xhttp.send();
		}
		function disable_link()
		{
			var xhttp = new XMLHttpRequest();
			
			xhttp.open("GET", "disable.php", true);
			console.log("inside disable")
			xhttp.send();
		}
		function toggle_button()
		{
			var btn=document.getElementById('toggle_button');
			console.log("in toggle")
			if(btn.innerText  =='enable')
			{
				enable_link();
				console.log("enable")

				btn.innerText  ='disable'
				alert("this linl was disable  ");
			}
			else
			{
				console.log("not enable")
				disable_link();
				btn.innerText  ='enable'
				alert("this link was enable  ");
			}
			
		}
		function set_disable()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      				document.getElementById("change_text").innerHTML =
      					this.responseText;
    			}
  			};
			xhttp.open("GET", "disable_page.html", true);
			xhttp.send();
			
		}
		</script>
		<div id='change_text'>
	</div>
<p id="match_table_second_name">
	<div style="overflow-y:auto;">
			<table id="match_table" align=center border="2" cellpadding="22" cellspacing="8" width="700px" height="450" style="overflow:auto;">
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
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Sept 20</td>
					<td>DC vs K11P</td>
					<td>New Delhi</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Sept 21</td>
					<td>SH vs RCB</td>
					<td>Chennai</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Sept 22</td>
					<td>RR vs CSK</td>
					<td>Mumbai</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Sept 23</td>
					<td>KKR vs MI</td>
					<td>Bengaluru</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Sept 24</td>
					<td>K11P vs RCB</td>
					<td>Kanpur</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Sept 25</td>
					<td>CSK vs DC</td>
					<td>Mumbai</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Sept 26</td>
					<td>KKR vs SH</td>
					<td>Ranchi</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Sept 27</td>
					<td>RR vs K11P</td>
					<td>Thiruvananthapuram</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Sept 28</td>
					<td>RCB vs MI</td>
					<td>Indore</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Sept 29</td>
					<td>DC vs SH</td>
					<td>Cuttack</td>
					<td>
						<h5 style="text-align:center"><a href='seat-booking.php'>Select</a></h5>















						<?php
    $mysqli =new mysqli('localhost','root','','sample') or die("f");
        $result = $mysqli->query("SELECT * FROM link WHERE link_name ='regi'")or die("error");
        //pre_r()$result;
        ?>
    
    
           
            <?php
            while($row = $result->fetch_assoc()):
            ?>
            
        
            
            <?php  
                $status = $row['status'];
              if($status==1){

						echo"<button onclick='toggle_button()' id='toggle_button'>disable</button>";
			  }
			  else{
						echo"<button onclick='toggle_button()' id='toggle_button'>enable</button>";
						
				  }	
				endwhile;
				  ?>
				

















                        
					</td>
				</tr>

				<tr>
					<td>Sept 30</td>
					<td>RR vs KKR</td>
					<td>Barabari</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Oct 1</td>
					<td>K11P vs MI</td>
					<td>Visakhapatnam</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>
				<tr>
					<td>Oct 2</td>
					<td>CSK vs SH</td>
					<td>Holkar.S</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Oct 3</td>
					<td>RCB vs RR</td>
					<td>Pune</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>
				<tr>
					<td>Oct 4</td>
					<td>MI vs SH</td>
					<td>Rajkot</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Oct 5</td>
					<td>RCB vs DC</td>
					<td>Lucknow</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Oct 6</td>
					<td>MI vs RR</td>
					<td>Ranchi</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Oct 7</td>
					<td>KKR vs CSK</td>
					<td>Dehradum</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Oct 8</td>
					<td>SH vs K11P</td>
					<td>Lucknow</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Oct 9</td>
					<td>RR vs DC</td>
					<td>Greater Noida</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>

				<tr>
					<td>Oct 10</td>
					<td>CSK vs RCB</td>
					<td>Guwahati</td>
					<td><input class="buttons" style="background-color:gray;" type="button" value="Select" /></td>
				</tr>
<!