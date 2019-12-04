<html>
  <head>
    <title>Public profile</title>
    <style>
      body{
        background-image:url(image13.jpg);
        background-repeat:no-repeat;
      height:100%;
      background-position: center;
      background-size: cover;
        height:1140px;
      }
      #close{
        background:red;
        color:white;
        padding:10px;
      border-radius:20%;}
      h1{
        font-size:250%;
        font-family:emoji;
        color:#0B0B3B;
      }
      h3{
font-style:italic;
        font-size:100%;
        color:#61210B;
      }
      table,td{
        border: 1px solid black; 
        padding:8px;
        font-size:25px;
        font-weight:bold;
        color:#0B0B3B;
        font-family:cursive; 
        margin-left:110px;
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
      $query = "select images.encoderd_image from images where images.email= '$email'";
    $result=$conn->query($query);
    if ($result->num_rows==1) {
      $row = $result->fetch_assoc();
      echo '<img src="'.$row->encoderd_image.'" width="100">';
    }
$sql="select * from mycoder where mycoder.email='$email'";
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
         $edu=$row["edu"];
         $abi=$row["abi"];
         $ach=$row["ach"];
         $tho=$row["tho"];
         $goal=$row["goal"];
         $option=$row["option"];
    echo "<center><table>
      <tr>
        <td>FirstName</td>
        <td>$fname</td></tr>
      <tr>
        <td>LastName</td>
        <td>$lname</td></tr>
      <tr>
        <td>Email</td>
        <td>$email</td></tr>
      <tr>
        <td>Date-of-Birth</td>
        <td>$dob</td></tr>
      <tr>
        <td>Gender</td>
        <td>$gen</td></tr>
      <tr>
        <td>Address</td>
        <td>$addr</td></tr>
      <tr>
        <td>Education</td>
        <td>$edu</td></tr>
      <tr>
        <td>Abilities</td>
        <td>$abi</td></tr>
      <tr>
        <td>Achievements</td>
        <td>$ach</td></tr>
      <tr>
        <td>Thoughts</td>
        <td>$tho</td></tr>
      <tr>
        <td>Goals</td>
        <td>$goal</td></tr>
      <tr>
        <td>Migle with Team</td>
        <td>$option</td></tr>";
         if($row["job"]!=NULL)
         {
           $job=$row["job"];
			echo "<tr>
        <td>Job</td>
        <td>$job</td></tr>";
         }
         if($row["intern"]!=NULL)
         {
           $intern=$row["intern"];
           echo "<tr>
        <td>Internships</td>
        <td>$intern</td></tr>";
         }
         if($row["pos"]!=NULL)
         {
           $pos=$row["pos"];
           echo "<tr>
        <td>Positions Of Responsibility</td>
        <td>echo $pos;</td></tr>";
         }
         if($row["training"]!=NULL)
         {
           $training=$row["training"];
			echo "<tr>
        <td>Trainings</td>
        <td>echo $training;</td></tr>";
         }
         if($row["proj"]!=NULL)
         {
           $proj=$row["proj"];
         echo "<tr>
        <td>Projects</td>
        <td>echo $proj;</td></tr>";
         }
         if(($row["c"]||$row["coops"]||$row["ds"]||$row["python"]||$row["cg"]||$row["r"]||$row["java"]||$row["dbms"]||$row["html"]||$row["css"]||$row["js"]||$row["jsp"]||$row["php"]||$row["xml"]||$row["seql"]||$row["jq"])!=NULL)
         {
           if($row["c"]!=NULL)
           {
             
             $c=$row["c"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$c</tr></td></tr";
           }
         if($row["coops"]!=NULL)
         {
          $coops=$row["coops"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$coops</tr></td></tr";
         }
         if($row["ds"]!=NULL)
         {
         $ds=$row["ds"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$ds</tr></td></tr";
         }
         if($row["python"]!=NULL)
         {
         $python=$row["python"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$python</tr></td></tr";
         }
         if($row["cg"]!=NULL)
         {
          $cg=$row["cg"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$cg</tr></td></tr";
         }
         if($row["r"]!=NULL)
         {
           $r=$row["r"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$r</tr></td></tr";
         }
         if($row["java"]!=NULL)
         {
		 $java=$row["java"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$java</tr></td></tr";
         }
         if($row["dbms"]!=NULL)  
         {
           $dbms=$row["dbms"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$dbms</tr></td></tr";
         }
          if($row["html"]!=NULL) 
          {
           $html=$row["html"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$html</tr></td></tr";
          }
           if($row["css"]!=NULL)
           {
            $css=$row["css"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$css</tr></td></tr";
           }
           if($row["js"]!=NULL)
           {
            $js=$row["js"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$js</tr></td></tr";
           }
           if($row["jsp"]!=NULL)
           {
            $jsp=$row["jsp"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$jsp</tr></td></tr";
           }
           if($row["php"]!=NULL)
           {
            $php=$row["php"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$php</tr></td></tr";
           }
           if($row["xml"]!=NULL)
           {
            $xml=$row["xml"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$xml</tr></td></tr";
           }
           if($row["seql"]!=NULL)
           {
            $seql=$row["seql"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$seql</tr></td></tr";
           }
           if($row["jq"]!=NULL)
           {
			 $jq=$row["jq"];
           echo "<tr><td>Skilled in</td>";
         echo "<td>$jq</tr></td></tr";
           }
           echo "</table></center>";
       }  
       }
else{
echo "0 results";
}
?>
    <table>
    <center><form action="newwelcome.php" method="post">
      <input type="submit" value="Close" id="close"></form></center></table>
  </body>
</html>

