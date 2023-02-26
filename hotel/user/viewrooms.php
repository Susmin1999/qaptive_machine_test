<?php
session_start();
include('../db.php');
$uid = $_SESSION['login_main'];


if($_SESSION['login_main']==""){
  header('location:../index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
		<title>User | Book Rooms</title>	
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="col-sm-8">
<h1 style="text-align:center; color:brown; margin-left:600px; font-family:Times New Roman;" class="mainTitle">USER | BOOK ROOMS</h1>
<div class="container-fluid container-fullw bg-white" style="margin-left:500px;">
<div class="row">
<table class="table table-hover" id="sample-table-1" style="margin-left:5px;">
<thead>
<tr>
<th class="center">#</th>
<th>Room No.</th>
<th>Room Type</th>
<th>Price</th>
<th>Action</th>
</tr>
</thead>

<tbody>
<?php
$fdate= $_GET['from_date'];
$tdate= $_GET['to_date'];
$sql=mysqli_query($conn,"select * from tbl_rooms");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

<tr>
<td class="center"><?php echo $cnt;?>.</td>
<td class="hidden-xs"><?php echo $row['room_no'];?></td>
<td><?php echo $row['room_type'];?></td>
<td><?php echo $row['price'];?></td>
<td><a class='btn btn-primary btn-sky-blue' href='bookrooms.php?uid=<?php echo $row['room_id'];?>&from_date=<?php echo $fdate;?>&to_date=<?php echo $tdate; ?>'>BOOK</td>
</tr>

<?php 
$cnt=$cnt+1;
}
?>
</tbody>
</table>
<div>
<button style="align: center; width: 500px;height: 50px; margin-top: 5px; text-color: black; margin-left:100px"><a href="udashboard.php">Back To Home</button>
</div>
</div>
</div>
</body>
</html>