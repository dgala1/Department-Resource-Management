<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<div id="main_container">
	<div class="header">   <img src="images/lg.jpg.jpg" alt="" title="" width="300" height="74" border="0"/>
    	<div class="right_header">       	       
 <div >
                <ul id="navlist"><li id="active"><br /><a class="current" href="dept.php" title="" style:"float:right;">Home</a>     </li><br/><br /><br /> <br><br>                                        
 				` <li id="active"><a href="profile.php" title="" style:"float:left;">FACULTY</a></li>
                    <li id="active"><a href="load.php" id="current">LOAD ADJUSTMENT</a> <br /><br /></li>
                    <li id="active"><a href="seminar2.php" id="current">SEMINAR</a> <br /><br /></li>
                    <li id="active"><a href="feed.php" id="current">FEEDBACK</a> <br /><br /></li>
                    <li id="active"><a href="table.php" id="current">TIMETABLE</a> <br /><br /></li>
                     </li> <li><a class="current" href="login.php" title="" style:"float:center;">SESSIONALS</a></li>
                 </ul>
            </div>
                  
        </div>
    
    </div>
    
<div id="ab">
<style type="text/css">
div
{
   border:1px solid;
}
.divtable
{
    display:table;
	width:40px;
}
.divrow
{
    display:table-row;
border:1px solid;
    
}
.divcol
{
    display:table-cell;
    width:40px;
}
.headrow
{
    display:table-caption;
}

.content
{
    display:table-cell;
    width:40px;
}
table, td, th
{
border:1px solid green;
}
th
{
background-color:green;
color:white;
}
</style>
    <title></title>
</head>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
session_start();
$fac=$_SESSION['code'];
if(isset($_POST['login']))
{
$m1 =$_POST['username1'];
$m2 =$_POST['username2'];
$m3 =$_POST['username3'];
$m4 =$_POST['username4'];
$m5 =$_POST['username5'];
$m6 =$_POST['username6'];
$m7 =$_POST['username7'];
$m8 =$_POST['username8'];
$qry1="INSERT INTO `department`.`facmon` (`facname`, `nine`,`ten`,`eleven`,`twelve`,`one`,`two`,`three`,`four`) VALUES ('$fac','$m1', '$m2', '$m3','$m4','$m5','$m6','$m7','$m8');";
$res1=@mysql_query($qry1)or die(mysql_error());


$m9 =$_POST['username9'];
$m10 =$_POST['username10'];
$m11 =$_POST['username11'];
$m12 =$_POST['username12'];
$m13 =$_POST['username13'];
$m14 =$_POST['username14'];
$m15 =$_POST['username15'];
$m16 =$_POST['username16'];
$qry2="INSERT INTO `department`.`factue` (`facname`, `nine`,`ten`,`eleven`,`twelve`,`one`,`two`,`three`,`four`) VALUES ('$fac','$m9', '$m10', '$m11','$m12','$m13','$m14','$m15','$m16');";
$res2=@mysql_query($qry2)or die(mysql_error());


$m17 =$_POST['username17'];
$m18 =$_POST['username18'];
$m19 =$_POST['username19'];
$m20 =$_POST['username20'];
$m21 =$_POST['username21'];
$m22 =$_POST['username22'];
$m23 =$_POST['username23'];
$m24 =$_POST['username24'];


$qry3="INSERT INTO `department`.`facwed` (`facname`, `nine`,`ten`,`eleven`,`twelve`,`one`,`two`,`three`,`four`) VALUES ( '$fac','$m17', '$m18', '$m19','$m20','$m21','$m22','$m23','$m24');";
$res3=@mysql_query($qry3)or die(mysql_error());


$m25 =$_POST['username25'];
$m26 =$_POST['username26'];
$m27 =$_POST['username27'];
$m28 =$_POST['username28'];
$m29 =$_POST['username29'];
$m30 =$_POST['username30'];
$m31 =$_POST['username31'];
$m32 =$_POST['username32'];


$qry4="INSERT INTO `department`.`facthur` ( `facname`, `nine`,`ten`,`eleven`,`twelve`,`one`,`two`,`three`,`four`) VALUES ( '$fac','$m25', '$m26', '$m27','$m28','$m29','$m30','$m31','$m32');";
$res4=@mysql_query($qry4)or die(mysql_error());


$m33 =$_POST['username33'];
$m34 =$_POST['username34'];
$m35 =$_POST['username35'];
$m36 =$_POST['username36'];
$m37 =$_POST['username37'];
$m38 =$_POST['username38'];
$m39 =$_POST['username39'];
$m40 =$_POST['username40'];

$qry5="INSERT INTO `department`.`facfri` (`facname`, `nine`,`ten`,`eleven`,`twelve`,`one`,`two`,`three`,`four`) VALUES ('$fac','$m33', '$m34', '$m35','$m36','$m37','$m38','$m39','$m40');";
$res5=@mysql_query($qry5)or die(mysql_error());


$m41 =$_POST['username41'];
$m42 =$_POST['username42'];
$m43 =$_POST['username43'];
$m44 =$_POST['username44'];
$m45 =$_POST['username45'];
$m46 =$_POST['username46'];
$m47 =$_POST['username47'];
$m48 =$_POST['username48'];

$qry6="INSERT INTO `department`.`facsat` (`facname`, `nine`,`ten`,`eleven`,`twelve`,`one`,`two`,`three`,`four`) VALUES ( '$fac','$m41', '$m42', '$m43','$m44','$m45','$m46','$m47','$m48');";
$res6=@mysql_query($qry6)or die(mysql_error());


}
?>
<br /><br /><br /><br />
<center>
<form method="post" action="factable1.php">
  <div class="divtable" style="width:200px;">

   <div class="headrow"><center>FACULTY TIME TABLE</center></div>
  
    <div class="divrow"></div>
  
  
    <div class="divrow">
     <div class="divcol"><center>TIME/SUBJECT</center></div>
     <div class="divcol"><center>Monday</center></div>
     <div class="divcol"><center>Tuesday</center></div>
     <div class="divcol"><center>Wednesday</center></div>
     <div class="divcol"><center>Thursday</center></div>
     <div class="divcol"><center>Friday</center></div>
     <div class="divcol"><center>Saturday</center></div>
    </div>
    <div class="divrow">
        <div class="content"><center>9-10</center></div>
        <div class="content"><td> <center> <center><select name="username1">
       
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username9">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username17">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username25">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username33">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username41">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
     </div>
    <div class="divrow">
        <div class="content"><center>10-11</center></div>
        <div class="content"><td> <center><select name="username2">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username10">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username18">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username26">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username34">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username42">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
    </div>
   <div class="divrow">
   <div class="content"><center>11-12</center></div>
        <div class="content"><td> <center><select name="username3">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username11">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username19">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username27">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username35">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username43">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
    </div>
    <div class="divrow">
        <div class="content"><center>12-1</center></div>
       <div class="content"><td> <center><select name="username4">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username12">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username20">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username28">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username36">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username44">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
    </div>
    <div class="divrow">
        <div class="content"><center>1-2</center></div>
        <div class="content"><td> <center><select name="username5">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username13">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username21">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username29">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username37">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username45">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
    </div>
    <div class="divrow">
   <div class="content"><center>2-3</center></div>
        <div class="content"><td> <center><select name="username6">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username14">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username22">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username30">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username38">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username46">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
    </div>
    <div class="divrow">
   <div class="content"><center>3-4</center></div>
        <div class="content"><td> <center><select name="username7">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username15">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username23">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username31">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username39">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username47">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
    </div>
    <div class="divrow">
   <div class="content"><center>4-5</center></div>
        <div class="content"><td> <center><select name="username8">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username16">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username24">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username32">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username40">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
        <div class="content"><td> <center><select name="username48">
<option>     </option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$result = mysql_query("SELECT `subname`FROM `subject` WHERE fullname='$fac'");

while($res= mysql_fetch_array($result))
			{
			echo '<option value="'.$res['subname'].'">'.$res['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td> </center></div>
    </div>
    </div>
    <input name ="login" id="login" type="submit" ><br>
    </form>
    </center>
</body>
</html>
</div>
<div id="footer">
  	<div class="copyright">   
        </div>
        <div class="center_footer"style:"text-align:center">COMPUTER SCIENCE DEPARTMENT</div>  
   

</div>
