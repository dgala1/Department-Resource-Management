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
//require_once('fauth.php');
$stream=$_SESSION['stream'];
$year=$_SESSION['year'];
$facname=$_SESSION['name'];
$qry="select * from subject where fullname='$facname' && stream='$stream' && year='$year'";
$result=mysql_query($qry);
$row=mysql_fetch_array($result);
if($facname==$row['fullname'])
{
$date=$_SESSION['date'];
$time=$_SESSION['time'];
$weekday = date('l', strtotime($date)); // note: first arg to date() is lower-case L
echo "<br>";
if(isset($_POST['submit']))
{
$_SESSION['code']=$_POST['code'];
header("Location:facfac3.php");
}
else if(isset($_POST['request']))
{	$_SESSION['code']=$_POST['code'];
	$date=$_SESSION['date'];
	$time=$_SESSION['time'];
	$fac1=$_SESSION['name'];
	$fac2=$_SESSION['code'];
	$message='request pending';	
	if($weekday == "Monday")
{
$aa1=mysql_query("select `$time` from facmon where facname='$fac1'");		
		while($rows1=mysql_fetch_array($aa1))
		{
			$abc1=$rows1[$time];
			$result1=mysql_query("insert into swap (`date`,`time`,`stream`,`year`,`facpng`,`lecpng`,`facped`,`status`) VALUES ('$date','$time','$stream','$year','$fac1','$abc1','$fac2','$message')");
		}	
		$qry = "update staff set status='1' where firstname = '$fac2'";
			$result1=mysql_query($qry);
}
elseif($weekday == "Tuesday")
{
$aa1=mysql_query("select `$time` from factue where facname='$fac1'");		
		while($rows1=mysql_fetch_array($aa1))
		{
			$abc1=$rows1[$time];
			$result1=mysql_query("insert into swap (`date`,`time`,`stream`,`year`,`facpng`,`lecpng`,`facped`,`status`) VALUES ('$date','$time','$stream','$year','$fac1','$abc1','$fac2','$message')");
		}	
		$qry = "update staff set status='1' where firstname = '$fac2'";
			$result1=mysql_query($qry);
}
elseif($weekday == "Wednesday")
{
$aa=mysql_query("select `$time` from facwed where facname='$fac1'");		
		while($rows=mysql_fetch_array($aa))
		{
			$abc=$rows[$time];
			$result=mysql_query("insert into swap (`date`,`time`,`stream`,`year`,`facpng`,`lecpng`,`facped`,`status`) VALUES ('$date','$time','$stream','$year','$fac1','$abc','$fac2','$message')");
		}	
		$qry = "update staff set status='1' where firstname = '$fac2'";
			$result1=mysql_query($qry);
}
elseif($weekday == "Thursday")
{
$aa=mysql_query("select `$time` from facthur where facname='$fac1'");		
		while($rows=mysql_fetch_array($aa))
		{
			$abc=$rows[$time];
			$result=mysql_query("insert into swap (`date`,`time`,`stream`,`year`,`facpng`,`lecpng`,`facped`,`status`) VALUES ('$date','$time','$stream','$year','$fac1','$abc','$fac2','$message')");
		}	
		$qry = "update staff set status='1' where firstname = '$fac2'";
			$result1=mysql_query($qry);
}
elseif($weekday == "Friday")
{
$aa=mysql_query("select `$time` from facfri where facname='$fac1'");		
		while($rows=mysql_fetch_array($aa))
		{
			$abc=$rows[$time];
			$result=mysql_query("insert into swap (`date`,`time`,`stream`,`year`,`facpng`,`lecpng`,`facped`,`status`) VALUES ('$date','$time','$stream','$year','$fac1','$abc','$fac2','$message')");
		}	
		$qry = "update staff set status='1' where firstname = '$fac2'";
			$result1=mysql_query($qry);
}
elseif($weekday == "Saturday")
{
$aa=mysql_query("select `$time` from facsat where facname='$fac1'");		
		while($rows=mysql_fetch_array($aa))
		{
			$abc=$rows[$time];
			$result=mysql_query("insert into swap (`date`,`time`,`stream`,`year`,`facpng`,`lecpng`,`facped`,`status`) VALUES ('$date','$time','$stream','$year','$fac1','$abc','$fac2','$message')");
		}	
		$qry = "update staff set status='1' where firstname = '$fac2'";
			$result1=mysql_query($qry);
			}
}
}
else
{
	//header("Location:facfac1.php");
	echo "please select an appropriate stream or year";
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
<big><big><h3> ENTER DETAILS </h3><br>
</big></big>
<form method="post" action="facfac2.php">
<center>
<table width="40%">
<tbody>
<tr><td style="text-align: left; width:150px;"><h3>CHECK FACULTY</td>
<td><select name="code">
<option>------Select one------</option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
if($weekday == "Monday")
{
$ab=mysql_query("SELECT 
     DISTINCT subject.fullname
 FROM subject as subject
 LEFT OUTER JOIN facmon as facmon
     ON subject.fid=facmon.fid
 WHERE subject.stream='$stream'
     AND subject.year='$year'
	 AND facmon.$time=' '
	 AND subject.fullname!='$facname'");
while($ab1= mysql_fetch_array($ab))
			{
			echo '<option value="'.$ab1['fullname'].'">'.$ab1['fullname'].'</option>';
			}
		   
		   echo '</select>';
}
elseif($weekday == "Tuesday")
{
$ab=mysql_query("SELECT 
     DISTINCT subject.fullname
 FROM subject as subject
 LEFT OUTER JOIN factue as factue
     ON subject.fid=factue.fid
 WHERE subject.stream='$stream'
     AND subject.year='$year'
	 AND factue.$time=' '
	 AND subject.fullname!='$facname'");
while($ab1= mysql_fetch_array($ab))
			{
			echo '<option value="'.$ab1['fullname'].'">'.$ab1['fullname'].'</option>';
			}
		   
		   echo '</select>';
}
elseif($weekday == "Wednesday")
{
$ab=mysql_query("SELECT 
     DISTINCT subject.fullname
 FROM subject as subject
 LEFT OUTER JOIN facwed as facwed
     ON subject.fid=facwed.fid
 WHERE subject.stream='$stream'
     AND subject.year='$year'
	 AND facwed.$time=' '
	 AND subject.fullname!='$facname'");
while($ab1= mysql_fetch_array($ab))
			{
			echo '<option value="'.$ab1['fullname'].'">'.$ab1['fullname'].'</option>';
			}
		   
		   echo '</select>';
}
elseif($weekday == "Thursday")
{
$ab=mysql_query("SELECT 
     DISTINCT subject.fullname
 FROM subject as subject
 LEFT OUTER JOIN facthur as facthur
     ON subject.fid=facthur.fid
 WHERE subject.stream='$stream'
     AND subject.year='$year'
	 AND facthur.$time=' '
	 AND subject.fullname!='$facname'");
while($ab1= mysql_fetch_array($ab))
			{
			echo '<option value="'.$ab1['fullname'].'">'.$ab1['fullname'].'</option>';
			}
		   
		   echo '</select>';
}
elseif($weekday == "Friday")
{
$ab=mysql_query("SELECT 
     DISTINCT subject.fullname
 FROM subject as subject
 LEFT OUTER JOIN facfri as facfri
     ON subject.fid=facfri.fid
 WHERE subject.stream='$stream'
     AND subject.year='$year'
	 AND facfri.$time=' '
	 AND subject.fullname!='$facname'");
while($ab1= mysql_fetch_array($ab))
			{
			echo '<option value="'.$ab1['fullname'].'">'.$ab1['fullname'].'</option>';
			}
		   
		   echo '</select>';
}
elseif($weekday == "Saturday")
{
$ab=mysql_query("SELECT 
     DISTINCT subject.fullname
 FROM subject as subject
 LEFT OUTER JOIN facsat as facsat
     ON subject.fid=facsat.fid
 WHERE subject.stream='$stream'
     AND subject.year='$year'
	 AND facsat.$time=' '
	 AND subject.fullname!='$facname'");
while($ab1= mysql_fetch_array($ab))
			{
			echo '<option value="'.$ab1['fullname'].'">'.$ab1['fullname'].'</option>';
			}
		   
		   echo '</select>';
}

?>
</select></td></h3></tr>
</tbody>
</table>
<br>
<br>
<button name ="submit" id="submit" type="submit" value="submit" >submit</button>
<button name ="request" id="request" type="submit" value="request">send request<br>
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
