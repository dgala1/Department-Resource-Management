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
                <ul id="navlist"><li id="active"><br /><a class="current" href="dept.php" title="" style:"float:right;">Home</a>     </li><br/><br /><br /> <br><br>                                        
 				` <li id="active"><a href="profile.php" title="" style:"float:left;">FACULTY</a></li>
                    <li id="active"><a href="load.php" id="current">LOAD ADJUSTMENT</a> <br /><br /></li>
                    <li id="active"><a href="seminar2.php" id="current">SEMINAR</a> <br /><br /></li>
                    <li id="active"><a href="feed.php" id="current">FEEDBACK</a> <br /><br /></li>
                    <li id="active"><a href="table.php" id="current">TIMETABLE</a> <br /><br /></li>
                     </li> <li><a class="current" href="sessadmn.php" title="" style:"float:center;">SESSIONALS</a></li>
                 </ul>
            </div>
                  
        </div>
    
    </div>
<div id="abc">
<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
//require_once('aauth.php');
if(isset($_POST['login']))
{
$first_name =$_POST['username'];
if($first_name=="")
{ echo "</br> please enter valid username </br>";}
$password1 =$_POST['password'];
if($password1=="")
{echo "</br> please enter valid password</br> ";}	
$desig =$_POST['cds'];
$id=$_POST['facid'];
$sta=0;
$qry="INSERT INTO `department`.`staff` (`fid`,`firstname`, `password`,`designation`,`status`) VALUES ('$id','$first_name', '$password1','$desig','$sta');";
$res=@mysql_query($qry)or die(mysql_error());
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
<big><big><h3>ADD NEW FACULTY</h3><br>
</big></big>
<form method="post" action="profile1.php">
<center>
<table width="40%">
<tbody>
<tr>
<td style="text-align: left;"><h3>FACULTY ID</h3><br>
</td>
<td><input name="facid" type="text"><br>
</td>
</tr>
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


