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
		<title>Admin | Update Rooms</title>	
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body>
	<style>

</style>
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 style="text-align:center; color:brown; margin-left:600px; font-family:Times New Roman;" class="mainTitle"><b>Admin | Update Rooms</b></h1>
</div>
</div>
</section>

<div>
	<input type="text" id="myInput" style="padding:10px; margin-left:850px;" onkeyup="myFunction()" placeholder="Search Room" title="Type in a name">
</div>
<br><br>

<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
	
<table class="table table-hover" id="sample-table-1">
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
<td><a class='btn btn-primary btn-sky-blue' href='editrooms.php?uid=<?php echo $row['room_id'];?>'>Edit</td>
<td><a class='btn btn-primary btn-sky-blue' href='deleterooms.php?uid=<?php echo $row['room_id'];?>'>Delete</td>
</tr>

<?php 
$cnt=$cnt+1;
}
?>
</tbody>
</table>

<script>
function myFunction() {
 
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("sample-table-1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<div>
<button style="align: center; width: 500px;height: 50px; margin-top: 200px; text-color:black; margin-left:750px"><a href="adashboard.php">Back To Home</button>
</div>
</div>
</div>
</body>
</html>