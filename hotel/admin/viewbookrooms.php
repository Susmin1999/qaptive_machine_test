<?php
session_start();
include('../db.php');
$uid = $_SESSION['login_main'];
if($_SESSION['login_main']==""){
  header('location:../log.php');
}    
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>View Bookings</title>	
      <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body>
       
	<section class="ftco-section">
		<div class="container"  style="margin-right:550px">
			<div class="row justify-content-center">
				<div class="col-md-10 text-center mb-2">
					<h1 class="heading-section" style="text-align:center; color:#d01976; margin-left:500px; font-family:Times New Roman">VIEW BOOKINGS</h1>
                    <br><br><br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-580">
						<table class="table">
						  <thead class="thead-dark" style="margin-left:550px">
						    <tr>  
						      <th style="margin-left:550px">Name</th>
						      <th>Room No.</th>
							  <th>From Date</th>
							  <th>To Date</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php
                          $sql=mysqli_query($conn,"select * from tbl_booking");
                          $cnt=1;
                          while($row=mysqli_fetch_array($sql)){
                          ?>
						      <tr class="alert" role="alert"> 
						      <td style="padding:10px;"><?php echo $row['name'];?></td>
                              <td><?php echo $row['room_no'];?></td>
                              <td><?php echo $row['from_date'];?></td>
							  <td><?php echo $row['to_date'];?></td>								  
                              </tr>
                              <?php } ?>
						  </tbody>
						</table>
                        <br><br><br><br>
						<button style="align: center; width: 369px;height: 33px; margin-top: 8px; margin-left:550px;"><i class="icon icon-save icon-large"><a href="adashboard.php"></i> Back To Home</button>
					</div>
				</div>
			</div>
		</div>
</section>
</body>
</html>	 