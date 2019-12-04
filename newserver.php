<?php
session_start();
$email=$_POST["email"];
$passw=$_POST["password"];
$GLOBALS['error']="";
if($_POST)
{
if(!$_POST["email"])
{
$error.="An email address is required.<br>";
}
if(!$_POST["password"])
{
$error.="Password is Required.<br>";
}
 
        if ($error != "") {
            
            $error = '<div><p>There were error(s) in your form:</p>' . $error . '</div>';
          $_SESSION["error"]=$error;
          echo '<script type="text/javascript">window.location="nextlogin.php";</script>';
        } else{
   $servername="shareddb-p.hosting.stackcp.net";
$username="Mounika";
$password="siri@database";
$dbname="mydatabase-3131359451";
$conn = new mysqli($servername, $username, $password,$dbname);
          if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
          $sql="select * from mycoder where mycoder.email='$email' and mycoder.pw='$passw'";
          $res=$conn->query($sql);
          if($res->num_rows>0)
          {
            $_SESSION['email']=$email;
            echo '<script type="text/javascript">window.location="newwelcome.php";</script>';
          }
          else{
             $error.="Entered email or password is wrong";
            $_SESSION["error"]=$error;
             echo '<script type="text/javascript">window.location="nextlogin.php";</script>';}
        }
}?>

