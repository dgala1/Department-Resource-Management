
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<div id="main_container">
	<div class="header">
    	<div id="logo"><a href="index.html"><img src="images/lg.jpg.jpg" alt="" title="" width="300" height="74" border="0" /></a></div>
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
 
<div id="abc"> <?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");

if(isset($_POST['submit']))
{
$rollno =$_POST['roll'];
$stream =$_POST['str'];
$year =$_POST["year"];
$subject=$_POST["sub"];
$status=$_POST["sta"];
$faculty=$_POST["faculty"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST['roll'])||empty($_POST['str'])||empty($_POST['year'])||empty($_POST['sub'])||empty($_POST['sta'])||empty($_POST['faculty'])) {
	echo 'enter all the fields';
	}
	else
	{
$qry="INSERT INTO `department`.`feedback` (`srno`, `rollno`, `stream`, `year`,`subject`,`faculty`,`status`) VALUES (NULL, '$rollno', '$stream','$year','$subject','$faculty','$status');";
$res=@mysql_query($qry)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Thank you for feedback !! <br>';
}
}
}}
?>
<div style="text-align: center;"><br>
<br>
<br>
<br>
<big><big><h4>DEPARTMENT&nbsp; RESOURCE MANAGEMENT</h4><br>
<br><h4>
FeedBack Form</h4><br>
<br>
</big></big>
<form method="post" action="cr1.php">
* Fields To be filled compulsory...
<center>
<table width="40%">
<tbody>
<tr>
<td style="text-align: left;"><h3>ROLLNO *<br>
</td>
<td><input name="roll" type="text"><br>
</td></h3>
</tr>
<tr><td style="text-align: left; width:150px;"><h3>STREAM *</td><td><select name="str">
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
<td style="text-align: left;"><h3>SUBJECT *<br>
</td>
<td><input name="sub" type="int"><br>
</td></h3>
</tr>
<tr>
<td style="text-align: left;"><h3>STATUS *<br>
</td>
<td><textarea name ="sta" cols="16" rows="3" ></textarea><br>
</td></h3>
</tr>
<tr>
<td style="text-align: left;"><h3>FACULTY NAME *<br>
</td>
<td><input name="faculty" type="int"><br>
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