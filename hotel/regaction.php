<?php
include 'db.php';
session_start();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
	$address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $in="INSERT INTO `tbl_login`(`username`,`password`,`type`) VALUES ('$email','$password','user')";
    $sql=mysqli_query($conn,$in);
    $sql="SELECT * from tbl_login where username='$email'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result))
    {
        $id=$row['login_id'];
    }
    $sql1 = "INSERT INTO `tbl_reg`(`login_id`,`name`,`address`,`mobile`,`email`) VALUES ('$id','$name','$address','$mobile','$email')";
    $qry = mysqli_query($conn,$sql1);
    echo "<script> alert('Successfully Registered'); window.location.href='index.php';</script>";
} 
  else{
    echo '<script>alert("Username Already exists..Try another name")</script>';
    echo '<script>window.location="location:reg.php"</script>';

}

?>