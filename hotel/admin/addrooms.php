<?php
session_start();
include('../db.php');	

if(isset($_POST['submit']))
{
	$room_no=$_POST['room_no'];
	$room_type=$_POST['room_type'];
    $price=$_POST['price'];
  
$sql="INSERT INTO `tbl_rooms`(`room_no`,`room_type`,`price`) VALUES ('$room_no','$room_type','$price')";
$result = mysqli_query($conn,$sql);
echo "<script> alert('Item Added'); window.location.href='addrooms.php';</script>";

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="main.css" rel="stylesheet" media="all">
</head>

<body>
  
    
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" style="background-color: #f5f5f5;">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading" style="background-color: #82ae46;">
                    <h2 class="title">ADD ROOMS</h2>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
 		   
 
                        <div class="form-row m-p-55">
                            <div class="name">Room Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="room_no">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Room Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="room_type">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Price</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="price">

                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn--radius-2" type="submit" name="submit" style="background-color:#d33b33">Add</button>
                            &nbsp&nbsp&nbsp&nbsp&nbsp
                            <button class="btn btn--radius-2" type="submit" name="submit" style="background-color:#d33b33"><a href=adashboard.php>Back</button>
                        </div>
                       
                    </form>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>