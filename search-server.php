<html>
  <head>
    <title>Your results</title>
    <style>
      body{
        background-image:url(image26.png);
         background-repeat:no-repeat;
      background-size:cover;
      background-position: center;
      
      }
      #show{
		background:darkblue;
        color:yellow;
        padding:10px;
        border-radius:10%;
      }
      p,a{
        color:#FFFF00;
        margin-left:250px;
      }
      table,td{
        border:2px solid #2E9AFE;
        padding:10px;
        color:yellow;
        margin-left:200px;
        font-family:emoji;
        font-weight:bold;
        font-size:25px;
      }
      #emailselect{
margin-left:200px;
      }
    </style>
  </head>
  <body>
<?php
    session_start();
 $servername="shareddb-p.hosting.stackcp.net";
$username="Mounika";
$password="siri@database";
$dbname="mydatabase-3131359451";
$conn = new mysqli($servername, $username, $password,$dbname);
          if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$cols=array();
if($_POST)
{
  if($_POST["c"]!=NULL)
  {
    $c="c";
   array_push($cols,$c); 
  }
  if($_POST["coops"]!=NULL)
  {
    $coops="coops";
    array_push($cols,$coops);
  }
  if($_POST["ds"]!=NULL)
  {
    $ds="ds";
    array_push($cols,$ds);
  }
  if($_POST["python"]!=NULL)
  {
    $python="python";
    array_push($cols,$python);
  }
  if($_POST["cg"]!=NULL)
  {
    $cg="cg";
    array_push($cols,$cg);
  }
  if($_POST["r"]!=NULL)
  {
    $r="r";
    array_push($cols,$r);
  }
  if($_POST["java"]!=NULL)
  {
    $java="java";
    array_push($cols,$java);
  }
  if($_POST["dbms"]!=NULL)
  {
    $dbms="dbms";
    array_push($cols,$dbms);
  }
  if($_POST["html"]!=NULL)
  {
    $html="html";
    array_push($cols,$html);
  }
  if($_POST["css"]!=NULL)
  {
    $css="css";
    array_push($cols,$css);
  }
  if($_POST["js"]!=NULL)
  {
    $js="js";
    array_push($cols,$js);
  }
  if($_POST["jsp"]!=NULL)
  {
    $jsp="jsp";
    array_push($cols,$jsp);
  }
  if($_POST["php"]!=NULL)
  {
    $php="php";
    array_push($cols,$php);
  }
  if($_POST["xml"]!=NULL)
  {
    $xml="xml";
    array_push($cols,$xml);
  }
  if($_POST["seql"]!=NULL)
  {
    $seql="seql";
    array_push($cols,$seql);
  }
  if($_POST["jq"]!=NULL)
  {
    $jq="jq";
    array_push($cols,$jq);
  }
  if($_POST["job"]=="Yes")
  {
    $job="job";
    array_push($cols,$job);
  }
  if($_POST["intern"]=="Yes")
  {
   $intern="intern";
    array_push($cols,$intern);
  }
  if($_POST["edu"]!=NULL)
  {
    $edu=$_POST["edu"];
  }
}
    $arr=array();
 foreach ($cols as $columns){   
   $sql="select * from mycoder WHERE mycoder.edu='$edu' and $columns IS NOT NULL";
  $res=$conn->query($sql);
  if ($res->num_rows > 0) 
  {
    while($row = $res->fetch_assoc()) 
    {
      array_push($arr,$row["email"]);  
    }
} 
}
 $count=count($cols);
$counarr=array_count_values($arr);
    echo "<br><br><br><br><table><th>Email</th>";
foreach($counarr as $key=>$value)
{
  if($value==$count)
  {
    echo "<tr><td>{$key}</td></tr>";
  }
}
    echo "</table>";
?>
    <form action="show-profile.php" method="post"><br>
      <input type="email" name="emailselect" id="emailselect">&emsp;&emsp;&emsp;&emsp;
      <button type="submit" name="show" id="show">Show Profile</button><br><br>
    </form>
    <a href="search-buyer.html">Close</a>
  </body>
  </html>

