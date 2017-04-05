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
$stream=$_SESSION['stream10'];
$year=$_SESSION['year10'];
$sess=$_SESSION['sessional10'];
$code=$_SESSION['code'];
echo $code;
$as=0;
if(isset($_POST['submit']))
{
	$abc=$_POST['roll'];
	$mrks=$_POST['mrks'];
	if($sess=="1")
	{
		if($year== "1")
		{
			if($stream == "MBA.Tech")
			{
				$qry = "update mba_1 set $code='$mrks' where rollno = '$abc'";
				$result=mysql_query($qry);
			}
			else if($stream == "B.Tech")
			{
				$qry = "update b_1 set $code='$mrks' where rollno = '$abc'";
				$result=mysql_query($qry);
			}
		}
		else if($year== "2")
		{
			if($stream == "MBA.Tech")
			{
				$qry = "update mba_2 set $code='$mrks' where rollno = '$abc'";
				$result=mysql_query($qry);
			}
			else if($stream == "B.Tech")
			{
				$qry = "update b_2 set $code='$mrks' where rollno = '$abc'";
				$result=mysql_query($qry);
			}
		}
		else if($year== "3")
		{
			if($stream == "MBA.Tech")
			{
				$qry = "update mba_3 set $code='$mrks' where rollno = '$abc'";
				$result=mysql_query($qry);
			}
			else if($stream == "B.Tech")
			{
				$qry = "update b_3 set $code='$mrks' where rollno = '$abc'";
				$result=mysql_query($qry);
			}
		}
		else if($year== "4")
		{
			if($stream == "B.Tech")
			{
			$qry = "update b_4 set $code='$mrks' where rollno = '$abc'";
			$result=mysql_query($qry);
			}
		}
	}
	else if($sess=="2")
	{
		if($year== "1")
{
if($stream == "MBA.Tech")
{
$qry = "update mba_12 set $code='$mrks' where rollno = '$abc'";
$result=mysql_query($qry);
}
else if($stream == "B.Tech")
{
$qry = "update b_12 set $code='$mrks' where rollno = '$abc'";
$result=mysql_query($qry);
}
}
else if($year== "2")
{
if($stream == "MBA.Tech")
{
$qry = "update mba_22 set $code='$mrks' where rollno = '$abc'";
$result=mysql_query($qry);
}
else if($stream == "B.Tech")
{
$qry = "update b_22 set $code='$mrks' where rollno = '$abc'";
$result=mysql_query($qry);
}
}
else if($year== "3")
{
if($stream == "MBA.Tech")
{
$qry = "update mba_32 set $code='$mrks' where rollno = '$abc'";
$result=mysql_query($qry);
}
else if($stream == "B.Tech")
{
$qry = "update b_32 set $code='$mrks' where rollno = '$abc'";
$result=mysql_query($qry);
}
}
else if($year== "4")
{
if($stream == "B.Tech")
{
$qry = "update b_42 set $code='$mrks' where rollno = '$abc'";
$result=mysql_query($qry);
}
}
}}
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
<big><big><h3> ENTER DETAILS </h3><br>
</big></big>
<form method="post" action="abc.php">
<center>
<table width="40%">
<tbody>
<tr><tr><tr><tr><tr><tr><tr><tr> <tr>
<td style="text-align: left;"><h3>ROLL NO</h3></td>
<td><select name="roll">
<option>------Select one------</option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
if($sess=="1")
	{
		 if($year== "2")
		{
			if($stream == "MBA.Tech")
			{
				$result = mysql_query("SELECT `Rollno`FROM `mba_2` WHERE  $code='0'");
				while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['Rollno'].'">'.$res['Rollno'].'</option>';
			}		   
		   echo '</select>';
			}
			else if($stream == "B.Tech")
			{
				$result = mysql_query("SELECT `Rollno`FROM `b_2` WHERE  $code='0'");
				while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['Rollno'].'">'.$res['Rollno'].'</option>';
			}		   
		   echo '</select>';
			}
		}
		else if($year== "3")
		{
			if($stream == "MBA.Tech")
			{
				$result = mysql_query("SELECT `Rollno`FROM `mba_3` WHERE  $code='0'");
				while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['Rollno'].'">'.$res['Rollno'].'</option>';
			}		   
		   echo '</select>';
			}
			else if($stream == "B.Tech")
			{
				$result = mysql_query("SELECT `Rollno`FROM `b_3` WHERE  $code='0'");
				while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['Rollno'].'">'.$res['Rollno'].'</option>';
			}		   
		   echo '</select>';
			}
		}
		else if($year== "4")
		{
			if($stream == "B.Tech")
			{
			$result = mysql_query("SELECT `Rollno`FROM `b_4` WHERE $code='0'");
				while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['Rollno'].'">'.$res['Rollno'].'</option>';
			}		   
		   echo '</select>';
			}
		}
	}
	else if($sess=="2")
	{
 if($year== "2")
{
if($stream == "MBA.Tech")
{
				$result = mysql_query("SELECT `Rollno`FROM `mba_22` WHERE  $code='0'");
				while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['Rollno'].'">'.$res['Rollno'].'</option>';
			}		   
		   echo '</select>';
}
else if($stream == "B.Tech")
{
				$result = mysql_query("SELECT `Rollno`FROM `b_22` WHERE  $code='0'");
				while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['Rollno'].'">'.$res['Rollno'].'</option>';
			}		   
		   echo '</select>';
}
}
else if($year== "3")
{
if($stream == "MBA.Tech")
{
$result = mysql_query("SELECT `Rollno`FROM `mba_32` WHERE  $code='0'");
				while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['Rollno'].'">'.$res['Rollno'].'</option>';
			}		   
		   echo '</select>';
}
else if($stream == "B.Tech")
{
$result = mysql_query("SELECT `Rollno`FROM `b_32` WHERE  $code='0'");
				while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['Rollno'].'">'.$res['Rollno'].'</option>';
			}		   
		   echo '</select>';
}
}
else if($year== "4")
{
if($stream == "B.Tech")
{
$result = mysql_query("SELECT `Rollno`FROM `b_42` WHERE  $code='0'");
				while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['Rollno'].'">'.$res['Rollno'].'</option>';
			}		   
		   echo '</select>';
}
}
}


$result = mysql_query("SELECT `Roll`FROM `studentname` WHERE stream='$stream' && year='$year' ");
while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['Roll'].'">'.$res['Roll'].'</option>';
			}		   
		   echo '</select>';

?>
</select></td>
</tr>
</tr></tr></tr>
</tr></tr></tr></tr></tr>
<tr>
<td style="text-align: left;"><h3>MARKS</h3></td>
<td><input name="mrks" type="text"><br>
</td>
</tr>
</tbody>
</table>
<br>
<br>
<input name ="submit" id="submit" type="submit" ><br>
</form>
</center>
<big><big><br>
</big></big></div>
</body>
</html>
<div id="footer">
  	<div class="copyright">   
        </div>
        <div class="center_footer"style:"text-align:center">COMPUTER SCIENCE DEPARTMENT</div>  
</div>     
    </div>


 </div> 
</body>
</html>