<?php
$servername="shareddb-p.hosting.stackcp.net";
$username="Mounika";
$password="siri@database";
$dbname="mydatabase-3131359451";
$conn = new mysqli($servername, $username, $password,$dbname);
          if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$error="";
$successMessage="";
if($_POST)
{
if(!$_POST["fname"])
{
$error.="First Name is required.<br>";
}
if(!$_POST["lname"])
{
$error.="Last name is required.<br>";
}
if(!$_POST["email"])
{
$error.="AN email is required.<br>";
}
if(!$_POST["gen"])
{
$error.="Select one option is required.<br>";
}
if(!$_POST["pw"])
{
$error.="Password is required.<br>";
}
if(!$_POST["pw1"])
{
$error.="Confirm your password.<br>";
}
if(!$_POST["phone"])
{
$error.="Phone number is required.<br>";
}
if(!$_POST["dob"])
{
$error.="Date of Birth is required.<br>";
}
if(!$_POST["addr"])
{
  $error.="Address is required.<br>";
}
if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
  if($_POST["pw"]<>$_POST["pw1"])
  {
$error.="Re-check your password.Both password and confirm password are not same.<br>";
 }
        if ($error != "") {
            
            $error= '<div class="alert alert-danger" style="color:darkblue;" role="alert"><p style="color:red;">There were error(s) in your form:</p>' . $error . '</div>';
            
        } else{
 $successMessage = '<div class="alert alert-success" role="alert">Congratulations!!Your account is created!!</div>';
          $first_name = $conn->real_escape_string($_REQUEST['fname']);
          $first_name=ucfirst($first_name);
		  $last_name = $conn->real_escape_string($_REQUEST['lname']);
          $last_name=ucfirst($last_name);
          $pw = $conn->real_escape_string($_REQUEST['pw']);
          $pw1 = $conn->real_escape_string($_REQUEST['pw1']);
          $gen = $conn->real_escape_string($_REQUEST['gen']);
          $phone = $conn->real_escape_string($_REQUEST['phone']);
          $dob = $conn->real_escape_string($_REQUEST['dob']);
          $addr = $conn->real_escape_string($_REQUEST['addr']);
          $email=$conn->real_escape_string($_REQUEST['email']);
          $sql="insert into mycoder(fname,lname,email,pw,pw1,gen,phone,dob,addr) values('$first_name','$last_name','$email','$pw','$pw1','$gen','$phone','$dob','$addr')";
          $conn->query($sql);
}
}
$conn->close();
?>
<html>
<head>
<title>Register As a Coder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <style>
    body{
    background-repeat:no-repeat;
      height:100%;
      background-position: center;
      background-size: cover;
    }
    h1{
      font-family:Gabriola;
      font-size:70px;
      color:#FA8072;
    }
     label{
      font-family:Gabriola;
      font-size:30px;
      color:#FA8072;
    }
    #gen{
      color:#FA8072;
    }
    p,a{
      font-family:Gabriola;
      color:#FA8072;
      font-size:40px;
    }
    #submit{
      background:#FA8072;
    }
  </style>
</head>
<body style="background-image:url(image34.jpg)"><center>
<h1>Registration</h1>
  <h4 style="color:red" align="right">Make sure to fill the fields contain "*"!!</h4>
<div id="error"><? echo $error.$successMessage; ?></div>
<form method="post"><table>
    
      <tr><td><label for="fname">First Name:<spam style="color:red">*</spam></label></td>&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;
        <td><input type="text" size="30" id="fname" name="fname" placeholder="First Name"></td></tr>
  

  <tr><td><label for="lname">Last Name:<spam style="color:red">*</spam></label></td>&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;
    <td><input type="text" size="30" id="lname" name="lname" placeholder="Last Name"></td></tr>
    
<tr>
   <td><label for="add">Address:<spam style="color:red">*</spam></label></td>&emsp;&emsp;&emsp;
<td><textarea rows="3" columns="100" id="addr" name="addr" placeholder="Current Address"></textarea></td></tr>
    
<tr>
   <td><label for="phone">Phone Number:<spam style="color:red">*</spam></label></td>&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;
   <td><input type="tel" size="30" name="phone" id="phone" placeholder="Phone Number"></td></tr>
    
<tr>
  <td><label for="email">Email Address:<spam style="color:red">*</spam></label></td>&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;
  <td><input type="email" size="30" id="email" name="email" placeholder="Email Address"></td></tr>
   
<tr>
  <td><label for="pw">Password:<spam style="color:red">*</spam></label></td>&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;
  <td><input type="password" size="30" id="pw" name="pw" placeholder="Password"></td></tr>
  
<tr>
  <td><label for="pw1">Confirm Password:<spam style="color:red">*</spam></label></td>&nbsp;&nbsp;&nbsp;&ensp;&emsp;&emsp;&emsp;
  <td><input type="password" size="30" id="pw1" name="pw1" placeholder="Confirm Password"></td></tr>
    
<tr>
  <td><label for="gen">Gender:<spam style="color:red">*</spam></label></td>&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;
    <td><input type="radio" size="30" value="Male" name="gen" id="gen">Male&nbsp;<input type="radio" value="Female" name="gen" id="gen">Female</td></tr>
    
<tr>
  <td><label for="dob">Date of Birth:<spam style="color:red">*</spam></label></td>
  <td><input type="date" size="30" id="dob" name="dob" placeholder="dd/mm/yyyy"></td></tr></table>
    
<center> <input type="submit" name="submitBtn" value="Submit" id="submit" class="btn btn-primary"><br><br>
  
<center><p>Already Registered!!<a href="newlogin.html">Login Here.</a><p></center>
</form>
</center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
<script type="text/javascript">

$("form").but(function(e){
              var error="";
              if($("#email").val()==""){
    error+="The email field is required.<br>";
}
    if($("pw").val()==""){
        error+="The password field is required.<br>";
    }
     if($("fname").val()==""){
        error+="The first name field is required.<br>";
    }
     if($("lname").val()==""){
        error+="The Last Name field is required.<br>";
    }
     if($("gen").val()==""){
        error+="The gender field is required.<br>";
    }
     if($("pw1").val()==""){
        error+="The confirm password field is required.<br>";
    }
     if($("phone").val()==""){
        error+="The telephone field is required.<br>";
    }
     if($("dob").val()==""){
        error+="The Date Of Birth field is required.<br>";
    }
  if($("pw").val()!=$("pw1").val())
 {
 error+="Re-check your password.Both password and confirm password are not same.<br>";  
 } 
  if($("addr").val()==""){
    error+="Address field is required.<br>";
  }
     if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  return true;
                window.location.replace("newlogin.html");
              }
  
})
    </script>
</body>
</html>

