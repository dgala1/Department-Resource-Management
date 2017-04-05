<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<div id="main_container">
	<div class="header">
    	<div id="logo"><a href="dept.php"><img src="images/lg.jpg.jpg" alt="" title="" width="300" height="74" border="0"/></a></div>
        <div class="right_header">
        	
            <div class="top_menu">
            
            </div>
        
            <div id="menu">
                <ul>  
                	<li></li>
                    <li></li>
                    <li></li><br /><br />
                    <li><a class="current" href="dept.php" title="" style:"float:right;">Home</a></li>
                  
                </ul>
            </div>
        
        </div>
    </div>
 
<div id="abc">
<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");

if(isset($_POST['login']))
{
session_start();
$_SESSION['name']=$_POST['username'];
$_SESSION['pass']=$_POST['password'];
$_SESSION['desig']=$_POST['cds'];
$first_name =$_POST['username'];
if($first_name=="")
{ echo "</br> please enter valid username </br>";}
$password1 =$_POST['password'];
if($password1=="")
{echo "</br> please enter valid password</br> ";}
$desig =$_POST['cds'];
$qry="select * from staff where firstname='$first_name' && password='$password1' && designation='$desig'";
$result=mysql_query($qry);
$row=mysql_fetch_array($result);

if($first_name==$row['firstname'] && $password1==$row['password'])
{
	if($desig==admin)
	{
		header("Location:main.php");
	}
	else if($desig==faculty)
	{
		header("Location:faculty.php");
	}
	else if($desig==cr)
	{
		header("Location:cr.php");
	}
	//echo "LOGIN SUCCESSFUL";
	//header("Location:main.php");				
}
	else
{
	echo "</br> NOT SUCCESSFUL ..please try again";
}

}
?>
<html>
<head>
<meta id="_moz_html_fragment">
</head>
<body style="background-image: url(images/background4.jpg);">
<div style="text-align: center;"><br>
<br>
<br>
<br>
<big><big><h3>DEPARTMENT&nbsp; RESOURCE MANAGEMENT</h3><br>
<br>
<br>
</big></big>
<form method="post" action="login.php">
<center>
<table width="40%">
<tbody>
<tr>
<td style="text-align: left;"><h3>USERNAME</h3><br>
</td>
<td><input name="username" type="text"><br>
</td>
</tr>
<tr>
<td style="text-align: left;"><h3>PASSWORD</h3><br>
</td>
<td><input name="password" type="password"><br>
</td>
</tr>
<tr>
<td style="text-align: left;"><h3>DESIGNATION *</h3><br>
</td>
<td >
<select name="cds" style="width: 160px;">
            <option value="" >----------- Select -----------</option>
<option value="admin">  admin  </option>
<option value="faculty">faculty</option>
<option value="cr">  cr  </option>
</select>
</td>
</tr>
</tbody>
</table>
<br>
<br>
<input name ="login" id="login" type="submit" ><br>
</form>
</center>
<big><big><br>
</big></big></div>
</body>
</html>
</div>
 <div id="footer">
  	<div class="copyright">   
        </div>
        <div class="center_footer"style:"text-align:center">COMPUTER SCIENCE DEPARTMENT</div>  
</div> </div> 
</body>
</html>


