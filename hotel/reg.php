<!DOCTYPE html>
<html>
<head>
<style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: "Times New Roman", sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("img/img2.jpg") no-repeat center;
      background-size: cover;
      }
      .main-block {
      display: flex;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      padding: 50px;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }    
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
</head>

	<body>
    <div class="main-block">
      <div class="left-part">
                <h1 style="text-align:right">REGISTER HERE</h1>

      </div>
      <form method="POST" enctype="multipart/form-data" action="regaction.php" style="text-align:center">  
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
        </div>

<div class="form-group">
    <input type="text" placeholder="Name" id="name" name="name" class="form-control" required onchange="Validname();">
    <span id="msg1" style="color:red;"></span>
<script>		
function Validname() 
{
    var val = document.getElementById('name').value;

    if (!val.match(/^[A-Za-z\s]*$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter!!";
		            document.getElementById('name').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
<br><br>

<div class="form-wrapper">
    <input type="text" placeholder="Address" id="address" name="address"  class="form-control" required onchange="Validaddress();">
    <i class="zmdi zmdi-account"></i>
</div>
<span id="msg2" style="color:red;"></span>
<script>		
function Validaddress() 
{
    var val = document.getElementById('address').value;

    if (!val.match(/^[A-Za-z\s]*$/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter!!";
		            document.getElementById('address').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
<br>					

<div class="form-wrapper">
    <input type="text" placeholder="Mobile" name="mobile" id="mobile"  class="form-control" required onchange="Validmobile();">
    <i class="zmdi zmdi-account"></i>
</div>
<span id="msg3" style="color:red;"></span>
<script>
function Validmobile() 
{
    var val = document.getElementById('mobile').value;
    if (!val.match(/^[789][0-9]{9}$/))
    {
        document.getElementById('msg3').innerHTML="Only Numbers are allowed and must contain 10 number";
		            document.getElementById('mobile').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}
</script>
<br>

<div class="form-wrapper">
    <input type="text" placeholder="Email" name="email" id="email" class="form-control" required onchange="Validemail();">
    <i class="zmdi zmdi-email"></i>
</div>		
<span id="msg4" style="color:red;"></span>
<script>		
function Validemail() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)) 
    {
        document.getElementById('msg4').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}
</script>
<br>

<div class="form-wrapper">
    <input type="password" placeholder="Password" id="password" name="password" class="form-control" required onchange="Validpass();">
    <i class="zmdi zmdi-lock"></i>
</div>
<span id="msg5" style="color:red;"></span>
<script>		
function Validpass() 
{
    var val = document.getElementById('password').value;

    if (!val.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/)) 
    {
        document.getElementById('msg5').innerHTML="Upper case, Lower case, Special character and Numeric number are required in Password filed";
		
		     document.getElementById('password').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}
</script>
<br><br>	
<input type="submit" value="Register" name="submit" style="color:red; padding: 20px; border-radius: 50px; background: white;">
<br>
<button style="align: center; padding: 10px; width: 100px;height: 60px; margin-top: -100px; text-color:black; margin-left:15px; border-radius: 50px;"><a href="index.php">Back</button>
</form>
</div>
</div>
</body>
</html>
