<html>
  <head>
    <title>Public profile</title>
    <style>
      
      #close{
        background:red;
        color:white;
        padding:10px;
      border-radius:20%;}
      h3{
        font-style:italic;
        font-size:150%;
        color:#011A27;
      }
      h1{
        font-style:Oblique;
        font-size:250%;
        color:darkblue;
      }
      table,td{
        border: 1px solid black; 
        padding:8px;
        font-size:30px;
        font-weight:bold;
        color:darkblue;
        font-family:emoji; 
      }
      body{
        background-image:url(image17.jpeg);
        background-repeat:no-repeat;
      height:100%;
      background-position: center;
      background-size: cover;
      }
    </style>
  </head>
  <body>
    <center><h1>Profile</h1></center>
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
   
    $sql="select * from mybuyer where mybuyer.email='$email'";
     $res=$conn->query($sql);
       if($res->num_rows>0)
       {
         $row=$res->fetch_assoc();
         $fname=$row["fname"];
         $lname=$row["lname"];
         $email=$row["email"];
         $dob=$row["dob"];
         $gen=$row["gen"];
         $addr=$row["addr"];
         $phone=$row["phone"];
         $company=$row["company"];
         $cphone=$row["cphone"];
         $exp=$row["exp"];
         $cadd=$row["cadd"];
         echo "<center><table>
           <tr>
           <td>FirstName</td>
           <td>$fname</td></tr>
           <tr>
           <td>LastName</td>
           <td>$lname</td></tr>
           <tr>
           <td>Address</td>
           <td>$addr</td></tr>
           <tr>
           <td>Phone</td>
           <td>$phone</td></tr>
           <tr>
           <td>Email</td>
           <td>$email</td></tr>
           <tr>
           <td>Gender</td>
           <td>$gen</td></tr>
           <tr>
           <td>Date of Birth</td>
           <td>$dob</td></tr>
           <tr>
           <td>Company Name</td>
           <td>$company</td></tr>
           <tr>
           <td>Company Number</td>
           <td>cphone</td></tr>
           <tr>
           <td>Experience(yrs)</td>
           <td>$exp</td></tr>
           <tr>
           <td>Company Location</td>
           <td>$cadd</td></tr></table></center><br>";
       }
    else
    {
echo "0 results";
    }
?>
    <center><form action="newwelcome-buyer.php" method="post">
      <input type="submit" value="Close" id="close"></form></center>
  </body>
</html>

