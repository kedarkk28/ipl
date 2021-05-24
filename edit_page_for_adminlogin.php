<html>
    <head>
        <title>php Admin Page</title>
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
                <a href="edit.php">For Registration Edit</a>
                
                <a href="edit_seat.php">For Seats Edit</a>
                <a href="admin_page.html">Back to Actions</a>
              </div>
            </div>
    <body>            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


   
       
        <div class="justify-content-center">
        
           
            <form action="" class="example" method="POST" style="margin:auto;max-width:400px">
             
                
                    <input type="text" name="username"  placeholder="Search.." id="username">

         
                    <button type="submit" name="search" value="search"><i class="fa fa-search"></i> search</button>
           
               
<br><br>
</div>
<?php
    $mysqli =new mysqli('localhost','root','','ipl') or die("f");
    $id='0';
    $username="";
    $password="";
    if(isset($_POST['search'])) {
        $username=$_POST['username'];
        //$password=$_POST['password'];
        $result = $mysqli->query("SELECT * FROM `admin` WHERE username='$username' or  password='$username' or id ='$username'")or die("error");
      

       
        while($row = $result->fetch_assoc()){
            //echo "ff";
            $id=$row['id'];
            $username=$row['username'];
            $password=$row['password'];
        }
    
  
    }
       
        //pre_r()$result;
       
  
        ?>
    
        <table class="content-table">
           
                <tr>
                    <th>ID</th>
                    <th>username</th>
                    <th>password</th>
                  
                </tr>
           
<tr>
<td><?php echo $id; ?></td>
<td><?php echo $username; ?></td>
<td><?php echo $password ;?></td>
</tr>
        </table>
       </form> 

        <br><br>
    
         <?php require_once 'admin2.php'; ?>

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
        $result = $mysqli->query("SELECT * FROM admin")or die("error");
        //pre_r()$result;
        ?>
    
        <table class="content-table">
           
                <tr>
                    <th>ID</th>
                    <th>username</th>
                    <th>password</th>
                    <th colspan="2">action</th>
                </tr>
           
            <?php
            while($row = $result->fetch_assoc()):
            ?>
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td> 
            <td>
                <a href="edit_page_for_adminlogin.php?edit=<?php echo $row['id'];?>"
                class="btnt">edit</a>
                <a href="edit_page_for_adminlogin.php?delete=<?php echo $row['id'];?>"
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


<br><br>



        <div class="justify-content-center">
        <form action="admin2.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="form-group">
            <lebel>name</lebel>
            <input type="text" name="username" class="form-control" value="<?php echo $username;?>" placeholder="Enter your name">
 

            <lebel>password</lebel>
            <input type="text" name="password"class="class-control" value="<?php echo $password;?>" maxlength="4" placeholder="Enter your password">

        
                <?php 
                if($update == true): 
                ?>
                <button type="submit" class="btn btn-info" name="update">update</button>
                <?php else: ?>
               <button type="submit" class="btn btn-primary" name="save">save</button>
</div>         
                <?php endif;?>
        </form>
</div>
    </div>

    </body>
</html>
    


    
