<?php
session_start();
?>
<html>
<head>
<title>Login As a Coder</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <style>
    body{
      background-image:url(image5.jpg);
    }
    h2{
      font-family:"Georgia", serif;}
    label{
      color:midnightblue;
      font-size:150%;
      font-family: emoji;
      font-style:italic;
    }
    #submit{
      background:midnightblue;
      color:yellow;
      font-style:italic;
    }
    a{
      color:red;
    }
    .boxed {
  border: 3px solid white ;
      border-radius:50px;
      width:500px;
      height:250px;
      border-style:groove;
}
    .error{
      border:2px solod red;
      border-radius:50px;
      color:red;
      width:320px;
      height:40px;
      border-style:groove;
      font-size:18px;
    }
  </style>
</head>
<body>
  
<center><h2 style="color:midnightblue">Log in to CHOOSE A CODER</h2>
 <img src="image7.jpg">
  <div class="error"><?php echo $_SESSION["error"]; ?></div><br>
<form action="newserver.php" method="post">
<center>
  <div class="boxed"><br><br>
<fieldset class="form-group">
<label for="email">Email address:</label>&nbsp;&nbsp;&nbsp;
    <input type="email" size="30" id="email" name="email" size="30" placeholder="Enter email"><br>
    <small class="text-muted" style="color:midnightblue">We'll never share your email with anyone else.</small>
    </fieldset>
    <fieldset class="form-group">
    <label for="password">Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ensp;&nbsp;&nbsp;
    <input type="password" size="30" id="password" name="password" placeholder="Enter password">
 
    </fieldset>
    
  <input type="submit" value="Login" id="submit" class="btn btn-primary"><br><br>
  </div>
</center>
  </form>
  
    <p style="color:midnightblue">Not registered yet??<a href="register-as-a-coder.php">Register Here</a></p>
</center>
</body>
</html>

