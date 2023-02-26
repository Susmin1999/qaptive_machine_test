<?php
include('../db.php');
$did=$_GET['uid'];
$rr="DELETE FROM `tbl_rooms` WHERE room_id='$did'";
mysqli_query($conn,$rr);
echo '<script>alert("Delected Succesfully")</script>';
echo '<script>window.location="updaterooms.php"</script>';
?>