<?php
session_start();
$con = mysqli_connect('localhost','root','','food');
?>

<html lang="en">

<head>
    <title>FOOD AND BEVERAGES</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-image: url('coke_1.jpg');">
<?php

session_start();

$mysqli =new mysqli('localhost','root','','ipl') or die("f") ;
$db = mysqli_connect('localhost','root','','ipl');
$email = $_SESSION["email"];
    $result= $mysqli->query("SELECT * FROM registration WHERE email='".$email."'")or die("f");
    $row = $result->fetch_array();
    $n1 = $row['name'];
    $m1 = $row['mobile']; 
    $result1= $mysqli->query("SELECT * FROM seats WHERE r_id='".$r1."'")or die("f");
    $row1 = $result1->fetch_array();
    $s = $row1['section'];
    $q = $row1['quadrant'];
?>
    <div class="container">
        <div class="jumbotron my-5 jumbotron-billboard" style="opacity: 0.8;">
            <div class="img"></div>
            <h1 class="display-4 text-center ">FOOD AND BEVERAGE</h1>
            <form action="server1.php" method="post" id="form" >
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<?php echo $n1;?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Mobile No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<?php echo $m1;?>
                    </div>
                    <!--div class="form-group col-md-6">
                        <label for="inputEmail4">Seat(s):</label><center>
<?php echo $s;?></center>
                    </div-->
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2" name="orders_list">
                        <option> cream and onion lays 100/-</option>
                        <option> Sour Cream & Dill 100/-</option>
                        <option> Sour Cream & tomato 100/-</option>
                        <option> simply salted lays 100/-</option>
                        <option> mexican salted 100/-</option>
                        <option> cheese and cream lays 100/-</option>
                        <option> Sour Cream lays 100/-</option>
                        <option> tomato lays 100/-</option>
                        <option> potato lays 100/-</option>
                        <option> chilly grill lays 100/-</option>
                    </select>
                </div>



                <hr class="my-4">
                <button type="submit" class="btn btn-primary ">Place Order</button>
            </form>

        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
