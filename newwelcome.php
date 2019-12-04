<?php
session_start();
$user=$_SESSION["email"];
$servername="shareddb-p.hosting.stackcp.net";
$username="Mounika";
$password="siri@database";
$dbname="mydatabase-3131359451";
$conn = new mysqli($servername, $username, $password,$dbname);
          if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="select fname from mycoder where mycoder.email='$user'";
$res=$conn->query($sql);
if($res->num_rows>0)
{
  $row=$res->fetch_assoc();
}
?>
<html>
 <head>
   <title>Home page</title>
   <style>
     #pic{
       width:100%;
       height:100%;
       float:right;
     }
     #logout{
       background:darkblue;
       color:white;
       float:right;
       padding:10px;
       border-radius:20%;
       font-style:italic;
       font-size:120%;
     }
     body{
       background-image:url(image32.jpg);
       background-repeat:no-repeat;
      height:100%;
      background-position: center;
      background-size: cover;
      font-family:emoji; 
     }
     
     #submit
     {
background:#210B61;
       color:white;
       padding:5px;
       border-radius:10%;
       font-style:italic;
       font-size:100%;
       font-family:emoji;
       font-style:italic;
     }
     .col{
       background:#58ACFA;
     }
     h2 {
   width: 100%; 
   text-align: left; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
   margin: 10px 0 20px; 
} 

h2 span { 
    background:#210B61; 
  color:white;
  font-family:emoji;
  font-style:italic;
    padding:15px; 
  border-radius:10px;
  font-size:30px;
}
     .ro{
       background:orange;
       border: 3px solid white ;
      border-radius:50px;
      width:650px;
      height:400px;
      border-style:groove;
}
     b{
       font-size:40px;
       color:#58ACFA;
       font-family:"emoji";
       font-style:italic;
       text-decoration:underline;
     }
     p{
       color:#F7FE2E;
       font-size:35px;
     }
     #sub{
       color:#58ACFA;
     }
   </style>
  </head>
  <body>
    <div class="col"><br>
 
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="public-profile-cod.php"><input type="button" value="View Public Profile" id="submit"></a>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="profile-coder.php"><input type="button" value="Customize your Profile" id="submit"></a>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="help.php"><input type="button" value="Help" id="submit"></a>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="logout-cod.php"><input type="button" value="Logout" id="submit"></a>
      <br><br><h2>&emsp;&emsp;<span>Hello,&nbsp;<?php echo $row["fname"]; ?></span></h2></div>
    <br><br>
    <center>
      &emsp;&emsp;<font face=''><b>Every Programmer is an AUTHOR</b></font>
   <font face='Gabriola' size='80px'> <p >&emsp;A programmer is a person who fix a problem that you dont know you have,in a way you dont understand..!!
  <p>&emsp;Welcome to this international pool of coders,All The Best for your achivements in your career.</p></font>
    <p style="text-decoration:underline #58ACFA" id="sub">Search for your Buyer below</p>
    <form action="search-profile-buyer.php" method="post"><center><input type="email" name="emailselect" size="30">&emsp;<button type="submit" name="show" id="submit">Buyer Details</button></center></form></center>
  </body>
</html>

