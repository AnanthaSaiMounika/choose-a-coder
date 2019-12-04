<?php
    session_start();
    $email=$_SESSION["email"];
    $servername="shareddb-p.hosting.stackcp.net";
$username="Mounika";
$password="siri@database";
$dbname="mydatabase-3131359451";
$conn = new mysqli($servername, $username, $password,$dbname);
          if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$successMessage = "";
$sql="select * from mybuyer where mybuyer.email='$email'";
     $res=$conn->query($sql);
       if($res->num_rows>0)
       {
         $row=$res->fetch_assoc();
         $first_name = $conn->real_escape_string($_REQUEST['fname']);
         if($first_name==NULL)
         {
           $first_name=$row["fname"];
         }
         $last_name = $conn->real_escape_string($_REQUEST['lname']);
         if($last_name==NULL)
         {
           $last_name=$row["lname"];
         }
         $address = $conn->real_escape_string($_REQUEST['addr']);
         if($address==NULL)
         {
           $address=$row["addr"];
         }
         $phone = $conn->real_escape_string($_REQUEST['phone']);
         if($phone==NULL)
         {
           $phone=$row["phone"];
         }
          $dob = $conn->real_escape_string($_REQUEST['dob']);
         if($dob==NULL)
         {
           $dob=$row["dob"];
         }
         $company = $conn->real_escape_string($_REQUEST['company']);
         if($company==NULL)
         {
           $company=$row["company"];
         }
         $cphone = $conn->real_escape_string($_REQUEST['cphone']);
         if($cphone==NULL)
         {
           $cphone=$row["cphone"];
         }
         $exp = $conn->real_escape_string($_REQUEST['exp']);
         if($exp==NULL)
         {
           $exp=$row["exp"];
         }
         $cadd = $conn->real_escape_string($_REQUEST['cadd']);
        if($cadd==NULL)
         {
           $cadd=$row["cadd"];
         }
         $sql1="UPDATE mybuyer SET fname='".$first_name."',lname='".$last_name."',addr='".$address."',phone='".$phone."',dob='".$dob."',company='".$company."',cphone='".$cphone."',exp='".$exp."',cadd='".$cadd."' where email='$email'";
         if($conn->query($sql1))
         {
$successMessage = '<div class="alert alert-success" role="alert">Your details are updated.</div>';
         }
       }
?>
<html>
  <head>
    <title>Edit your Profile</title>
    <style>
     
     
      body{
        background-image:url(image1.jpg);
        background-repeat:no-repeat;
      height:100%;
      background-position: center;
      background-size: cover;
        height:800px;
      }
      h1{
        font-style:italic;
        color:#5882FA;
        font-weight:bold;
      }
      #submit{
        background:#5882FA;
        font-style:italic;
        padding:10px;
        border-radius:10%;
      }
      table,td{
        padding:10px;
        font-size:30px;
        font-family:emoji;
        font-style:italic;
        color:#5882FA;
      }
      #error{
        color:#5882FA;
      }
      
    </style>
  </head>
  <body>
    <center><h1>Edit Profile</h1></center>
    <center><div id="error"><?php echo "$successMessage"; ?></div></center>
    
     <form method="post">
    <center><table><tr>
      <td><label>First Name:</label></td>&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td><input type="text" size="30" id="fname" name="fname"></td></tr>

  <tr><td><label>Last Name:</label></td>&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
    <td><input type="text" size="30" id="lname" name="lname"></td></tr>

   <td><label>Address:</label></td>&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
   <td><textarea rows="3" columns="50" id="addr" name="addr"></textarea></td></tr>
 <tr>
   <td><label>Phone Number:</label></td>&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;
   <td><input type="tel" size="30" name="phone" id="phone"></td></tr>
<tr>
  <td><label>Date of Birth:</label></td>&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
  <td><input type="date" size="50" id="dob" name="dob"></td></tr>
<tr>
  <td><label>Company Name:</label></td>&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
  <td><input type="text" size="30" name="company" id="company"></td></tr>
<tr>
  <td><label>Company Phone Number:</label></td>&nbsp;&nbsp;&nbsp;
  <td><input type="tel" size="30" name="cphone" id="cphone"></td></tr>
<tr>
  <td><label>Experience:</label></td>&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
  <td><input type="number" size="30" name="exp" id="exp"></td></tr>
<tr>
  <td><label>Address of Company:</label></td>&nbsp;&nbsp;&nbsp;&emsp;&ensp;&nbsp;
  <td><textarea rows="3" columns="50" id="cadd" name="cadd"></textarea></td></tr></table></center><br><br>
       <center><button type="submit" id="submit">Submit</button><center><br>
</form>
         <form>
       <center><a href="newwelcome-buyer.php"><input type="button" value="Close" id="submit"></a></center></form>
  </body>
</html>
