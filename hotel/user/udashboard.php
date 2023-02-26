<?php
session_start();	
$d=$_SESSION['login_main'];
if($d)
{
	if(isset($_POST['submit']))
{
$fromdate=$_POST['from_date'];
$todate=$_POST['to_date'];	
header("Location: viewrooms.php?from_date=$fromdate&to_date=$todate");
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User  | Dashboard</title>
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
									<h1 class="mainTitle" style="text-align:center;">USER | DASHBOARD</h1>
																	</div>
							</div>
						</section>
						
				
<h2 class="StepTitle" style="text-align:center; color:#d01976;">Choose date range</h2><br>
<form method="POST">
<div style="margin-left: 430px;font-size: 30px;">
<label>Checkin</label>&nbsp&nbsp&nbsp&nbsp
<input type="date" name="from_date" style="height: 40px;width: 285px;border-radius: 11px;">
</div>
<br><br>
<div style="margin-left: 430px;font-size: 30px;">
<label>Checkout</label>&nbsp&nbsp
<input type="date" name="to_date" style="height: 40px;width: 285px;border-radius: 11px;">
</div>
<br><br>

<div>
<input type="submit" name="submit" style="height: 40px;width: 285px;border-radius: 11px;margin-left: 500px;">
</div>
</form>
</body>
<?php } ?>
<br><br><br>
<p>
	<button style="align: center; width: 300px;height: 50px; margin-top: 5px; text-color: black; margin-left:490px">
	<a href="../index.php">Logout</a></button>
</p>
</html>