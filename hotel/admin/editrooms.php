<?php
include('../db.php');
session_start();
$room_id = $_SESSION['login_main'];
$uid = $_GET['uid'];
	
if(isset($_POST['submit']))
{
$room_no=$_POST['room_no'];
$room_type=$_POST['room_type'];
$price=$_POST['price'];

$sql = "UPDATE `tbl_rooms` SET `room_no`='$room_no',`room_type`='$room_type',`price`='$price' WHERE room_id='$uid'";
$room_update = mysqli_query($conn,$sql);
echo '<script>alert("Updated Succesfully")</script>';
echo '<script>window.location="updaterooms.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Edit Rooms</title>
        <link href="main.css" rel="stylesheet" media="all">
	</head>
	<body>
		<div id="app">		
			<div class="app-content">
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8"><br><br><br>
									<h2 style="text-align:center; color:brown; margin-left:700px; font-family:Times New Roman;" class="mainTitle"><b>ADMIN | EDIT ROOMS</b></h2>
                                    <br><br><br><br>
								</div>
							</div>
						</section>
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">


                                                  
<?php 
$sql=mysqli_query($conn,"select * from tbl_rooms where room_id='$uid'");
while($data=mysqli_fetch_array($sql))
{
?>
</div>

<form role="form" name="edit" method="post" enctype="multipart/form-data" style="margin-left:700px">
<div class="form-row m-p-55">
                            <div class="name">Room Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="room_no" id="room_no" style="align:center" value="<?php echo $data['room_no']?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Room Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="room_type" id="room_type" value="<?php echo $data['room_type']?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Price</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="price" id="price" value="<?php echo $data['price']?>">

                                </div>
                            </div>
                        </div>
<div class="form-row">
    <input type="submit" name="submit" value="UPDATE" style="height: 45px;background: #a52a2ab0;border-radius: 14px;font-size: 22px;font-weight: 700;">
</div>
<button type="submit" class="btn btn-o" style="margin-left:100px; text-decoration:none; background: #a52a2ab0; border-radius: 14px"><a href="updaterooms.php">Back</button>
</form>													
<?php } ?>
</body>
</html>