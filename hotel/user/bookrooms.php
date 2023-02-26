<?php
include '../db.php';
session_start(); 
$uid=$_GET['uid'];
$fdate=$_GET['from_date'];
$tdate=$_GET['to_date'];
$cid=$_SESSION['login_main'];
if($_SESSION['login_main']==""){
    header('location:../index.php');
}

$sqli="SELECT * from tbl_reg where login_id='$cid'";
$results=mysqli_query($conn,$sqli);
$rows=mysqli_fetch_array($results);
$name=$rows['name'];
$sql="SELECT * from tbl_rooms where room_id='$uid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

    $room_no=$row['room_no'];
    $room_type=$row['room_type'];
    $price=$row['price'];

if(isset($_POST['submit']))
   {
    $name=$_POST['name'];
    $room_no=$_POST['room_no'];


$insert="INSERT INTO `tbl_booking`(`name`, `room_no`, `from_date`,`to_date`,`price`) VALUES ('$name','$room_no','$fdate','$tdate','$price')";
$sql=mysqli_query($conn,$insert);
echo '<script>alert("Booking Succesfull")</script>';
echo '<script>window.location="udashboard.php"</script>';


   }
?>

  
<!DOCTYPE html>
<html lang="en">
<head>
<link href="main.css" rel="stylesheet" media="all">
    <title>BOOK ROOMS</title>
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" style="background-color: #f5f5f5;">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading" style="background-color: #14c2da;">
                <h2 class="title">BOOKING</h2>
                </div>               

                <form method="POST">

                 <div class="card-body">
                 <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="name" id="name" style="width: 494px;" value="<?php echo $name;?>" >                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="form-row m-b-55">
                            <div class="name">Room No.</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="room_no" id="room_no" style="width: 494px;" value="<?php echo $room_no;?>" >                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Room Type</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" value="<?php echo $room_type;?>" name="room_type" id="room_type" type="text" style="width: 494px;">                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    
                     <div class="form-row m-b-55">
                            <div class="name">Price</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" value="<?php echo $price ?>" id="price" name="price" style="width: 494px;">    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row m-b-55">
                            <div class="name">From Date</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" value="<?php echo $fdate ?>" id="date" name="date" style="width: 494px;" readonly>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">To Date</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" value="<?php echo $tdate ?>" id="date" name="date" style="width: 494px;" readonly>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit" style="background-color:#d33b33">BOOK</button>&nbsp   
                            <button class="btn btn--radius-2" type="submit" name="submit" style="background-color:white"><a href=udashboard.php>Back</button>
                        </div>
            </div>
        </div>
    </div>
</body>
</html>