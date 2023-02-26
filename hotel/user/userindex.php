<?php
session_start();	
$d=$_SESSION['login_main'];
if($d)
{
	
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
									<h1 class="mainTitle" style="text-align:center; margin-top:-75px;">USER | DASHBOARD</h1>
									<br><br><br><br>
								</div>
							</div>
						</section>
						
			
                        <button style="margin-left: 500px;height: 30px;width: 330px;font-size: 23px; font-family:Times New Roman"><a style="text-decoration: none;color: black;" href="udashboard.php">Book Rooms</a></button>
						
	</body>
	<?php }?>
<br><br><br><br><br><br><br><br>
<p>
	<button style="align: center; width: 400px;height: 50px; margin-top: 5px; text-color: black; margin-left:470px"><a href="../index.php">Logout</button>
    </a>
</p>
</html>