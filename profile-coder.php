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
$email=$_SESSION["email"];
$error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["edu"]) {
            
            $error .= "An education qualification is required.<br>";
            
        }
        
        if (!$_POST["abi"]) {
            
            $error .= "The abilities field is required.<br>";
            
        }
        
        if (!$_POST["ach"]) {
            
            $error .= "The achievements field is required.<br>";
            
        }
      if (!$_POST["tho"]) {
            
            $error .= "The thoughts field is required.<br>";
            
        }
      if (!$_POST["goal"]) {
            
            $error .= "The goals field is required.<br>";
            
        }
      if (!$_POST["option"]) {
            
            $error .= "Choose that you mingled with team is required.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
        } else {
				$successMessage = '<div class="alert alert-success" role="alert">Your details are submitted.Thanks for filling the form!!</div>';
          $edu = $conn->real_escape_string($_REQUEST['edu']);
          $job = $conn->real_escape_string($_REQUEST['job']);
          $intern = $conn->real_escape_string($_REQUEST['intern']);
          $pos = $conn->real_escape_string($_REQUEST['pos']);
          $training = $conn->real_escape_string($_REQUEST['training']);
          $proj = $conn->real_escape_string($_REQUEST['proj']);
          $c = $conn->real_escape_string($_REQUEST['c']);
          $coops = $conn->real_escape_string($_REQUEST['coops']);
          $ds = $conn->real_escape_string($_REQUEST['ds']);
          $python = $conn->real_escape_string($_REQUEST['python']);
          $cg = $conn->real_escape_string($_REQUEST['cg']);
          $r = $conn->real_escape_string($_REQUEST['r']);
          $java = $conn->real_escape_string($_REQUEST['java']);
          $dbms = $conn->real_escape_string($_REQUEST['dbms']);
          $html = $conn->real_escape_string($_REQUEST['html']);
          $css = $conn->real_escape_string($_REQUEST['css']);
          $js = $conn->real_escape_string($_REQUEST['js']);
          $jsp = $conn->real_escape_string($_REQUEST['jsp']);
          $php = $conn->real_escape_string($_REQUEST['php']);
          $xml = $conn->real_escape_string($_REQUEST['xml']);
          $seql = $conn->real_escape_string($_REQUEST['seql']);
          $jq = $conn->real_escape_string($_REQUEST['jq']);
          $abi = $conn->real_escape_string($_REQUEST['abi']);
          $ach = $conn->real_escape_string($_REQUEST['ach']);
          $tho = $conn->real_escape_string($_REQUEST['tho']);
          $goal = $conn->real_escape_string($_REQUEST['goal']);
          $option = $conn->real_escape_string($_REQUEST['option']);
           $sql = "UPDATE mycoder SET edu='".$edu."',abi='".$abi."',ach='".$ach."',tho='".$tho."',goal='".$goal."',option='".$option."',job='".$job."',intern='".$intern."',pos='".$pos."',training='".$training."',proj='".$proj."',c='".$c."',coops='".$coops."',ds='".$ds."',python='".$python."',cg='".$cg."',r='".$r."',java='".$java."',dbms='".$dbms."',html='".$html."',css='".$css."',js='".$js."',jsp='".$jsp."',php='".$php."',xml='".$xml."',seql='".$seql."',jq='".$jq."' where email='$email'";
          $conn->query($sql);
        }
    }
?>
<html>
  <head>
    <title>Profile As A Coder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <style>
      #symbol{
        float:right;
        color:#A9BCF5;
      font-style:normal;
      font-size:130%;}
      body{
        background-image:url(image33.jpeg);
        background-repeat:no-repeat;
      height:100%;
      background-position: center;
      background-size: cover;
        height:1200px;
    } 
      h1{
        font-family:TIMES NEW ROMAN;
        color:cyan;
      }
      label{
        font-family:cursive;
        font-size:25px;
        color:cyan;
      }
      table,td{
        padding:5px;
      }
      #star{
        font-size:20px;
        color:cyan;
      }
      textarea{
background:transparent;
      }
    </style>
  </head>
  <body>
    <center><h1>PROFILE-CODER</h1></center>
    <p id="symbol">* symboled fields are required</p>
    <div id="error"><? echo "$error.$successMessage" ?></div><br>
    <form method="post" id="f1">
      <table>
    <fieldset id="f1"><tr>
      <td><label>EDUCATION:<span style="color:red">*</span></label></td>
      <td><textarea rows="2" cols="100" name="edu" id="edu"></textarea></td></tr>
   <tr>
      <td><label>JOBS:</label></td>
      <td><textarea rows="2" cols="100" name="job" id="job"></textarea></td></tr>
<tr>
  <td><label>INTERNSHIPS:</label></td>
      <td><textarea rows="2" cols="100" name="intern" id="intern"></textarea></td></tr>
<tr>
      <td><label>POSITIONS OF RESPONSIBILITY:</label></td>
      <td><textarea rows="2" cols="100" name="pos" id="pos"></textarea></td></tr>
    <tr>
      <td><label>TRAININGS:</label></td>
      <td><textarea rows="2" cols="100" name="training" id="training"></textarea></td></tr>
   <tr>
      <td><label>PROJECTS:</label></td>
      <td><textarea rows="2" cols="100" name="proj" id="proj"></textarea></td></tr>

      <tr><td><label>SKILLS:</label></td>
    <td> <table><tr><td><input type="checkbox" value="c" name="c" id="c"><span id="star">C Programming</span></td>
      <td><input type="checkbox" value="c++" name="coops" id="c++"><span id="star">C++</span></td></tr>
      <tr><td><input type="checkbox" value="data structures" name="ds" id="ds"><span id="star">Data Structures</span></td>
        <td><input type="checkbox" value="python" name="python" id="python"><span id="star">Python</span></td></tr><br>
     <tr><td><input type="checkbox" value="computer graphics" name="cg" id="cg"><span id="star">Computer Graphics</span></td>
      <td><input type="checkbox" value="R" name="r" id="r"><span id="star">R Language</span></td></tr><br>
      <tr><td><input type="checkbox" value="Java" name="java" id="java"><span id="star">Java</span></td>
      <td><input type="checkbox" value="DBMS" name="dbms" id="dbms"><span id="star">DBMS</span></td></tr><br>
      <tr><td><input type="checkbox" value="HTML" name="html" id="html"><span id="star">HTML</span></td>
  <td><input type="checkbox" value="CSS" name="css" id="css"><span id="star">CSS</span></td></tr><br>
    <tr><td><input type="checkbox" value="Java Script" name="js" id="js"><span id="star">JavaScript</span></td>
      <td><input type="checkbox" value="JSP" name="jsp" id="jsp"><span id="star">JSP</span></td></tr><br>
 <tr><td><input type="checkbox" value="php" name="php" id="php"><span id="star">PHP</span></td>
      <td><input type="checkbox" value="xml" name="xml" id="xml"><span id="star">XML</span></td></tr><br>
    <tr><td><input type="checkbox" value="MYSQL" name="seql" id="sql"><span id="star">MYSQL</span></td>
      <td><input type="checkbox" value="JQuery" name="jq" id="jq"><span id="star">JQery</span></td></tr></table></td></tr>
    <tr>
      <td><label>ABILITIES:<span style="color:red">*</span></label></td>
      <td><textarea rows="2" cols="100" name="abi" id="abi"></textarea></td></tr>
    </fieldset>
    <fieldset  id="f1"><tr>
      <td><label>ACHIEVEMENTS:<span style="color:red">*</span></label></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&nbsp;
      <td><textarea rows="2" cols="100" name="ach" id="ach"></textarea></td></tr>
    </fieldset>
    <fieldset id="f1"><tr>
      <td><label>THOUGHTS:<span style="color:red">*</span></label></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
      <td><textarea rows="2" cols="100" name="tho" id="tho"></textarea></td></tr>
    </fieldset>
    <fieldset id="f1"><tr>
      <td><label>GOALS:<span style="color:red">*</span></label></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
      <td><textarea rows="2" cols="100" name="goal" id="goal"></textarea></td></tr>
    </fieldset><fieldset  id="f1"><tr>
      <td><label>MINGLE WITH TEAM:<span style="color:red">*</span></label></td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
      <td><input type="radio" value="Yes" name="option" id="opt"><span id="star">Yes</span>&emsp;&emsp;&emsp;&emsp;&emsp;<input type="radio" value="No" name="option" id="opt"><span id="star">No</span></td></tr>
      </fieldset><br></table>
      <center><a href="newwelcome.php"><input type="button" value="Close" id="close" class="btn btn-primary"></a>&emsp;&emsp;
        <input type="submit" value="Submit" id="submit" class="btn btn-primary"></center>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
   
  </body>
</html>
    
