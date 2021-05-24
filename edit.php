<html>
    <head>
        <title>registration Page</title>
<link rel="stylesheet" href="table.css">
    </head>
    <style>
            /* Style The Dropdown Button */
            .dropbtn {
              background-color: #4CAF50;
              color: white;
              padding: 16px;
              font-size: 16px;
              border: none;
              cursor: pointer;
            }
            
            /* The container <div> - needed to position the dropdown content */
            .dropdown {
          
              position: relative;
              display: inline-block;
              
            }
            
            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
              display: none;
              position: absolute;
              background-color: #f9f9f9;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }
            
            /* Links inside the dropdown */
            .dropdown-content a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
            }
            
            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {background-color: #f1f1f1}
            
            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {
              display: block;
            }
            
            /* Change the background color of the dropdown button when the dropdown content is shown */
            .dropdown:hover .dropbtn {
              background-color: #3e8e41;
            }
            
            </style>
            
            <div class="dropdown">
              <button class="dropbtn">Dropdown</button>
              <div class="dropdown-content">
               
                <a href="edit_page_for_adminlogin.php">For Admin Edit</a>
                <a href="edit_seat.php">For Seats Edit</a>
                <a href="admin_page.html">Back to Actions</a>
              </div>
            </div>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
        <div class="justify-content-center">
        
           
            <form action="" class="example" method="POST" style="margin:auto;max-width:400px">
                             
<input type="text" name="username"  placeholder="Search.." id="username">
<button type="submit" name="search" value="search"><i class="fa fa-search"></i> search</button>
<!--Getting Name and Email-->
<input type="text" name="temp_data"  placeholder="Enter Id" id="username">         
<button type="submit" name="Click" value="Click"><i class="fa fa-search"></i> Click here to get Name and Email</button>                         
<br><br>
</div>
<?php
    $mysqli =new mysqli('localhost','root','','ipl') or die("f");
    $id='0';
    $name="";
    $password="";
    
    $address="";
    $dob="";
    $aadhar="";
    $city="";
    $country="";
    $email="";
    $mobile="";
    $passport="";
    $pin="";
    $state="";
    $gender="";
     if(isset($_POST['search'])) {
        $username=$_POST['username'];
        //$password=$_POST['password'];
        $result = $mysqli->query("SELECT * FROM `registration` WHERE name='$username' or  password='$username' or id ='$username' or email='$username' or mobile='$username'")or die("error");             
        while($row = $result->fetch_assoc()){
            $id=$row['id'];
           $name= $row['name']; 
             $dob=$row['dob']; 
            $gender=$row['gender']; 
           $mobile= $row['mobile']; 
           $email=$row['email']; 
             $aadhar=$row['aadhar']; 
           $address=$row['address']; 
            $password=$row['password'];            
             $country=$row['country']; 
            $city=$row['city']; 
            $state=$row['state'];            
             $pin=$row['pin']; 
             $passport=$row['passport'];
        }     
    }               //pre_r()$result;         
        ?>
		<br><br>
		<!--Displaying Name and Email by Using Cursor-->
    <?php
$db = mysqli_connect('localhost','root','','ipl');
if(isset($_POST['temp_data'])) {
        $search_variable=$_POST['temp_data'];
        $sql="CALL getEmailAndName($search_variable);";
		if($resultss=mysqli_query($db,$sql)){
		$roww=mysqli_fetch_row($resultss);
		//print_r($roww);
	}
	else
	echo "<h1>db not connected</h1>";
}
else
	echo "<h1>failed line 98</h1>";
?>
<center><table>
<tr>
    <th>Name</th>
    <th>Email</th>
</tr>
<tr>
     <td><?php echo $roww[0] ?></td>
     <td><?php echo $roww[1] ?></td>
</tr>
</table></center><br><br>
        <table class="content-table">
           
           
        <tr>
                    <th>ID</th>
                    <th>username</th>
                    <th>dob</th>
                    <th>gender</th>
                    <th>mobile</th>
                    <th>email</th>
                    <th>aadhar</th>
                    <th>address</th>
                    <th>password</th>
                    <th>country</th>
                    <th>city</th>
                    <th>state</th>
                    <th>pin</th>
                    <th>passport</th>
                    
                </tr>
<tr><td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $dob; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $mobile; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $aadhar; ?></td>
            <td><?php echo $address; ?></td>
            <td><?php echo $password; ?></td>
            <td><?php echo $country; ?></td>
            <td><?php echo $city; ?></td>
            <td><?php echo $state; ?></td>
            <td><?php echo $pin; ?></td>
            <td><?php echo $passport; ?></td>
</tr>
        </table>
       


    <body>
         <?php require_once 'admin.php'; ?>
            <?php
                if(isset($_SESSION['message'])):
            ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
<?php endif;
 ?>
     
        <?php
    $mysqli =new mysqli('localhost','root','','ipl') or die("f");
        $result = $mysqli->query("SELECT * FROM registration")or die("error");
        //pre_r()$result;
        ?>
    
        <table class="content-table">
           
                <tr>
                    <th>ID</th>
                    <th>username</th>
                    <th>dob</th>
                    <th>gender</th>
                    <th>mobile</th>
                    <th>email</th>
                    <th>aadhar</th>
                    <th>address</th>
                    <th>password</th>                    
                    <th>country</th>
                    <th>city</th>                   
                    <th>state</th>
                    <th>pin</th>
                    <th>passport</th>
                    <th colspan="2">action</th>
                </tr>
           <br><br>
            <?php
            while($row = $result->fetch_assoc()):
            ?>
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['aadhar']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['password']; ?></td>
           
            <td><?php echo $row['country']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['state']; ?></td>
            
            <td><?php echo $row['pin']; ?></td>
            <td><?php echo $row['passport']; ?></td>
           
            
           
            
            <td>
                <a href="edit.php?edit=<?php echo $row['id'];?>"
                class="btnt">edit</a>
                <a href="edit.php?delete=<?php echo $row['id'];?>"
                class="bt">delete</a>
            </td>   
            
            </tr>
            <?php
            endwhile;
            ?>
        </table>




            <?php
        pre_r($result->fetch_assoc());
        function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
    

        ?>



        <div class="justify-content-center">
        <form action="admin.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="form-group">
            
            
            <lebel>name:</lebel>
            <input type="text" name="name" class="form-control" value="<?php echo $username?>" placeholder="Enter your name">
 
            <lebel>aadhar_no:</lebel>
            <input type="text" name="aadhar" class="form-control" value="<?php echo $aadhar?>" placeholder="Enter your aadhar">
 <br><br>
            <lebel>dob:</lebel>
            <input type="date" name="dob" class="form-control" value="<?php echo $dob?>" placeholder="Enter your dob">
 <br><br>
            <lebel>mobile_no:</lebel>
            <input type="text" name="mobile" class="form-control" value="<?php echo $mobile?>"  maxlength="10" placeholder="Enter your mobile number">
 
            <lebel>email:</lebel>
            <input type="text" name="email" value="<?php echo $email?>" placeholder="Enter your email">
 <br><br>
            <lebel>gender:</lebel>
           
            <input type="radio" name="gender" value="m" <?php if($gender=="m") echo "checked='checked'"?> class="form-control"  >Male
					<input type="radio" name="gender" value="f"<?php if($gender=="f") echo "checked='checked'"?> >Female
                    <input type="radio" name="gender" value="o"<?php if($gender=="o") echo "checked='checked'"?> >Other
              <br><br>
                    <lebel>address:</lebel>
                   
                    <textarea name="address"   rows="4" col="9" class="form-control" required> <?php echo $address?></textarea>
<br><br>
            <lebel>pin-code:</lebel>
            <input type="text" name="pin" class="form-control" value="<?php echo $pin?>" placeholder="Enter your pin-code">
 <br><br>
            <lebel>country:</lebel>
            <input list="country" name="country"  value="<?php echo $country?>" >
					<datalist id="country">
                    
					<option value="India">
					<option value="USA">
					<option value="Germany">
                    </datalist>
                    <br><br>
                    <lebel>state:</lebel>
                    <select name="state"  value="<?php echo $state?>" required>
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
					
                </select>
                <br><br>
                <lebel>city:</lebel>
                <select name="city"  value="<?php echo $passport?>">
					<option value="City" required>City</option>		
					<option value="Pune">Pune</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Ahmadnagar">Ahmadnagar</option>
					<option value="Nagpur">Nagpur</option>
					<option value="Nashik">Nashik</option>
                </select>
                <br><br>
            <lebel>passport:</lebel>
            <input type="text" name="passport" class="form-control" value="<?php echo $passport?>" placeholder="Enter your passport">
 
            
            <lebel>password</lebel>
            <input type="text" name="password"class="class-control" value="<?php echo $password?>" maxlength="4" placeholder="Enter your password">

        
                <?php 
                if($update == true): 
                ?>
                <button type="submit" class="btn btn-info" name="update">update</button>
                <?php else: ?>
               <button type="submit" class="btn btn-primary" name="save">save</button>
</div>         
   <?php endif?>
        </form>
</div>
    </div>
    
    </body>
</html>
