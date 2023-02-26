<?php
include '../db.php';
session_start();
$id=$_SESSION['login_main'];
$n=mysqli_query($conn,"SELECT * FROM `tbl_rooms` WHERE room_id='$id'");
$rr = mysqli_fetch_assoc($n);

if(isset($_POST['submit']))
   {
    $name=$_POST['name'];
    $room_no=$_POST['room_no'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $price=$_POST['price'];

$insert="INSERT INTO `tbl_booking`(`name`, `room_no`, `from_date`, `to_date`, `price`) VALUES ('$name','$room_no','$from_date','$to_date','$price')";
$sql=mysqli_query($conn,$insert);
echo "<script> alert('Room Booked'); window.location.href='bookviewrooms.php';</script>";
   }
?>