 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
//require_once('fauth.php');
if(isset($_POST['login']))
{

$_SESSION['stream']=$_POST['str'];
$_SESSION['year']=$_POST['year'];
$_SESSION['date']=$_POST['date'];
$_SESSION['time']=$_POST['time'];
header("Location:facfac2.php");
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
<form method="post" action="facfac1.php">
<center>
<table width="40%">
<tbody>
<tr><td style="text-align: left; width:150px;"><h3>STREAM *</td>
<td><select name="str">
<option>------Select one------</option>
<option value="B.Tech">  B.Tech  </option>
<option value="MBA.Tech">M.B.A Tech</option>
</select></td></h3></tr>
<tr>
<td style="text-align: left;"><h3>YEAR *<br>
</td>
<td><select name="year">
<option>------Select one------</option>
<option value="1">  1  </option>
<option value="2">2</option>
<option value="3">  3  </option>
<option value="4">  4  </option>
</select>
</td></h3>
</tr>
<tr>
<td style="text-align: left;"><h3>DATE (yy-mm-dd) *<br>
</td>
<td><input name="date" type="date"><br>
</td></h3>
</tr>
<tr>
<td style="text-align: left;"><h3>TIME *<br>
</td>
<td><select name="time">
<option>------Select one------</option>
<option value="nine">  9-10  </option>
<option value="ten">10-11</option>
<option value="eleven">  11-12  </option>
<option value="twelve">  12-1  </option>
<option value="one">  1-2  </option>
<option value="two">  2-3  </option>
<option value="three">  3-4  </option>
<option value="four">  4-5  </option>

</select>
</td></h3>
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
<div id="footer">
  	<div class="copyright">   
        </div>
        <div class="center_footer"style:"text-align:center">COMPUTER 

SCIENCE DEPARTMENT</div>  
</div>     
    </div>


 </div> 
</body>
</html>
