<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<div id="main_container">
	<div class="header">   <img src="images/lg.jpg.jpg" alt="" title="" width="300" height="74" border="0" />
    	<div class="right_header">       	       
 <div >
                <ul id="navlist"><li id="active"><br /><a class="current" href="dept.php" title="" style:"float:right;">Home</a>     </li>     <br /><br /><br /> <br><br>                                        
 				<li id="active"><a href="profile2.php" title="" style:"float:left;">EDIT PROFILE</a></li>
                    <li id="active"><a href="facfac.php" id="current">LOAD ADJUSTMENT</a> <br /><br /></li>
                    <li id="active"><a href="seminar10.php" id="current">SEMINAR</a> <br /><br /></li>
                    
                    <li id="active"><a href="factab.php" id="current">TIMETABLE</a> <br /><br /></li>
                     </li> <li><a class="current" href="fac_sess.php" title="" style:"float:center;">SESSIONALS</a></li>
                 </ul>
            </div>
                  
        </div>
    
    </div>
<div id="abc">
 <?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
session_start();
$firstnam =$_SESSION['name'];
echo $firstnam;
$passwor =$_SESSION['pass'];
$designation=$_SESSION["desig"];
if(isset($_POST['submit']))
{

$phonenum=$_POST["phn"];
$emailid=$_POST["email"];

$qualification=$_POST["qual"];
$aoe=$_POST["aoe"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST['phn'])||empty($_POST['email'])||empty($_POST['qual'])||empty($_POST['aoe'])) {
	echo 'enter all the fields';
	}
	else
	{
$qry="UPDATE staff SET phoneno = '$phonenum' , emailid= '$emailid' , qualification= '$qualification' , aoe ='$aoe' where firstname='$firstnam' && password='$passwor' && designation='$designation'";
$res=@mysql_query($qry)or die(mysql_error());
}
}}
?>
<div style="text-align: center;"><br>
<br>
<br>
<br>
<big><big><h4>DEPARTMENT&nbsp; RESOURCE MANAGEMENT</h4><br>
<br><h4>
New User Registeration</h4><br>
<br>
</big></big>
<form method="post" action="profile3.php">
* Fields To be filled compulsory...
<center>
<table width="40%">
<tbody>

<tr>
<td style="text-align: left;"><h3>PHONENUMBER *<br>
</td>
<td><input name="phn" type="int"><br>
</td></h3>
</tr>
<tr>
<td style="text-align: left;"><h3>EMAILID *<br>
</td>
<td><input name="email" type="email"><br>
</td></h3>
</tr>

<tr>
<td style="text-align: left;"><h3>QUALIFICATION *<br>
</td>
<td><input name="qual" type="text"><br>
</td></h3>
</tr>
<tr>
<td style="text-align: left;"><h3>ARER OF INTEREST *<br>
</td>
<td><input name="aoe" type="int"><br>
</td></h3>
</tr>
</tbody>
  </table>
  <br>
  <br>
  <h4><input value="REGISTER" name="submit" type="submit"></h4><br>
  <br>
  </center>
</form>
<big><big><br>
</big></big>
</div>
</body>
</html>
  
    </div>
<div id="footer">
  	<div class="copyright">   
        </div>
        <div class="center_footer"style:"text-align:center">COMPUTER SCIENCE DEPARTMENT</div>  
</div>