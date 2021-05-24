
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
              
                if($status==0)
                {
                    $status=1;
                }
                else
                {
                    $status=0;
                }
                $mysqli->query("UPDATE `link` SET  `status`='$status' WHERE `link_name`='regi'")or die("ff");
                       
                header("Location: disable_button.php");
            ?>
           
            <?php
            endwhile;
            ?>
