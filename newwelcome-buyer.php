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
$sql="select fname from mybuyer where mybuyer.email='$user'";
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
     .col{
       background:#FFFF00;
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
     #logout{
       background:darkblue;
       color:white;
       float:right;
       padding:10px;
       border-radius:20%;
       font-style:italic;
       font-size:120%;
     }
    
     #show
     {
background:darkblue;
       color:white;
       padding:10px;
       border-radius:10%;
       font-style:italic;
       font-size:120%;
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
     body{
       background-image:url(image27.jpg);
        background-repeat:no-repeat;
      height:100%;
      background-position: center;
      background-size: cover;
     }
     b{
       color:orange;
       font-size:35px;
       font-family:cursive;
     }
     p{
       color:orange;
       font-size:25px;
       font-family:emoji;
       font-style:italic;
       font-weight:bold;
     }
   </style>
  </head>
  <body>
    <div class="col"><br>
  
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="public-profile-buyer.php"><input type="button" value="View Public Profile" id="submit"></a>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="edit-buyer.php"><input type="button" value="Customize your Profile" id="submit"></a>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="/help.php"><input type="button" value="Help" id="submit"></a>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="logout-buyer.php"><input type="button" value="Logout" id="submit"></a>
      <br><br><h2>&emsp;&emsp;<span>Hello,&nbsp;<?php echo $row["fname"]; ?></span></h2></div>
    <br><br>
    <center><b>Welcome,Buyer..!!</b><p>Controlling complexicity is the essence of computer programming.</p><p>Computer Technology is so built into our lives that its part of the surround of every artist.</p>
      <p>Choose the one who suits you!!</p><p>Choose your coder bellow</p></center>
    
    <form action="search-buyer.html" method="post"><center><a href="search-buyer.html"><input type="submit" value="Search Your Coder" id="show" name="syc"></a></center></form>
  </body>
</html>
