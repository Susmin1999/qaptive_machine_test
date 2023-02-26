<?php
include('db.php');
if(!isset($_SESSION)) { 
  session_start(); 
}      
    if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $password=$_POST['password'];  

    $conn=mysqli_connect("localhost", "root", "", "hotel");
    $sql="select * from tbl_login where username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_array($result);
  }
    if(!empty($rows))
{
    if($rows['type']=="user")
     {
      $_SESSION['login_main'] = $rows['login_id'];
        header("location:user/userindex.php");
     } 
     else if($rows['type']=="admin")
     {
      $_SESSION['login_main'] = $rows['login_id'];
        header("location:admin/adashboard.php");
     }
}
?> 

<html lang="en">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rooms-Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style>
body{
  margin: -30px;
  padding: -30px;
  box-sizing: border-box;
  font-family: "Times New Roman", sans-serif;
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: left;
  justify-content: right;
  background: url('img/img2.jpg');
}
::selection{
  color: #fff;
  background: #5372F0;
}

.wrapper header{
  margin: 150px 0;
  font-size: 35px;
  font-weight: 600;
}
.wrapper form{
  margin: -110px 0;
}
form .field{
  width: 100%;
  margin-bottom: 30px;
}
form .field.shake{
  animation: shake 0.3s ease-in-out;
}
@keyframes shake {
  0%, 100%{
    margin-left: 0px;
  }
  20%, 80%{
    margin-left: -12px;
  }
  40%, 60%{
    margin-left: 12px;
  }
}
form .field .input-area{
  height: 50px;
  width: 100%;
  position: relative;
}
form input{
  width: 100%;
  height: 100%;
  padding: 0 45px;
  font-size: 22px;
  background: none;
  border-radius: 5px;
  border: 1px solid #bfbfbf;
  border-bottom-width: 2px;
}
.field .input-area i{
  position: absolute;
  top: 50%;
  font-size: 22px;
  transform: translateY(-50%);
}
.input-area .icon{
  left: 15px;
  color: #bfbfbf;
  transition: color 0.2s;
}
form .field .error{
  display: none;
  margin: 150px 0;
}
.wrapper a{
  color: #5372F0;
  text-decoration: none;
  font-size: 20px;
}
form input[type="submit"]{
  height: 50px;
  margin-top: 20px;
  color: #fff;
  padding: 0px;
  border: none;
  font-family: "Times New Roman", sans-serif;
  background: #C27664;
  border-bottom: 5px solid rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}
form input[type="submit"]:hover{
  background: #FFAEBC;
}
</style>
</head>

<body>
  
  <div class="wrapper">
    <header style="color:#C27664">LOGIN HERE</header> 
    <form method="POST">
      <div class="field username">
        <div class="input-area">
          <input type="text" id="username" name="username" placeholder="username">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
      </div>

      
      <div class="field password">
        <div class="input-area">
          <input type="password" id="password" name="password" placeholder="password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
      </div>
     
     
      <input type="submit" id="signin" name="submit" value="Login"><br><br><br><br><br><br><br><br>
      <br><br><br><br><br>
      <a href="reg.php" style="color: #AA5656;"><b><h3>No Account?...REGISTER</h3></b></a>
      </form>
<script src="script.js"></script>
</body>
</html>