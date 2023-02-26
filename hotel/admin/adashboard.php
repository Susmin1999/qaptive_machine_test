<?php
session_start();		
$d=$_SESSION['login_main'];
if($d)
{

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Dashboard</title>
    </head>
<body>
<style>
body{
  background: url('../img/img7.jpg') no-repeat center;
  background-size: cover;
  padding:300px;
}
h1,h1{
  font-weight: 400px;
  margin-top: -150px;
  color: #d01976;
}
 </style>
						<?php include('../db.php'); ?>
						
			
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle" style="text-align:center; margin-left:60px;">ADMIN | DASHBOARD</h1>
																	</div>
							</div>
						</section>
						
				
<h2 class="StepTitle" style="text-align:center; color:#d01976; margin-left:50px;">ROOMS</h2><br>
<p>
    <a href="addrooms.php">
        <button style="margin-left: 500px;height: 30px;width: 330px;font-size: 23px; font-family:Times New Roman">Add Rooms</button>
	</a>
</p>
<p>
    <a href="updaterooms.php">
        <button style="margin-left: 500px;height: 30px;width: 330px;font-size: 23px; font-family:Times New Roman">Update Rooms</button>
    </a>
</p>
<p>
    <a href="viewbookrooms.php">
        <button style="margin-left: 500px;height: 30px;width: 330px;font-size: 23px; font-family:Times New Roman">View Booked Rooms</button>
    </a>
</p>
	</body>
	<?php } ?>
<br><br><br>
<p>
	<button style="align: center; width: 400px;height: 50px; margin-top: 5px; text-color: black; margin-left:470px"><a href="../index.php">Logout</button>
    </a>
</p>
</html>