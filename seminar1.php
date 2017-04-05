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

if(isset($_POST['login']))
{
session_start();


$grpno =$_POST['grp'];
if($grpno=="")
{ echo "</br> please enter valid groupno </br>";}
$stream =$_SESSION['stream'];
$year =$_SESSION['year'];
$grpmem1=$_POST["sub1"];
if($grpmem1=="")
{ echo "</br> please enter valid student1 </br>";}
$grpmem2=$_POST["sub2"];
if($grpmem2=="")
{ echo "</br> please enter valid student2 </br>";}
$grpmem3=$_POST["sub3"];
if($grpmem3=="")
{ echo "</br> please enter valid student3 </br>";}
$grpmem4=$_POST["sub4"];
$title=$_POST["tit"];
if($title=="")
{ echo "</br> please enter valid title </br>";}
$faculty=$_POST["faculty"];
if($faculty=="")
{ echo "</br> please enter valid faculty name </br>";}
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//if (empty($_POST['grp'])||empty($_POST['str'])||empty($_POST['year'])||empty($_POST['sub1'])||empty($_POST['sub2'])||empty($_POST['sub3'])empty($_POST['sub4'])||empty($_POST['tit'])||empty($_POST['faculty'])) {
//	echo 'enter all the fields';
	//}
//	else
	//{
$qry="INSERT INTO `department`.`seminar` (`grpno`, `stream`, `year`,`student1`,`student2`,`student3`,`student4`,`title`,`faculty`) VALUES ('$grpno','$stream','$year','$grpmem1','$grpmem2','$grpmem3','$grpmem4','$title','$faculty');";
$res=@mysql_query($qry)or die(mysql_error());
}

?>
<div style="text-align: center;"><br>
<br>
<br>
<br>
<big><big><h4>DEPARTMENT&nbsp; RESOURCE MANAGEMENT</h4><br>
<br><h4>
SEMINAR</h4><br>
<br>
</big></big>
<form method="post" action="seminar1.php">
* Fields To be filled compulsory...
<center>
<table width="40%">
<tbody>
<tr>
<td style="text-align: left;"><h3>GROUPNO *<br>
</td>
<td><input name="grp" type="text"><br>
</td></h3>
</tr>
<tr>
<td style="text-align: left;"><h3>STUDENT 1 *<br>
</td>
<td><input name="sub1" type="int"><br>
</td></h3>
</tr>
<tr>
<td style="text-align: left;"><h3>STUDENT 2 *<br>
</td>
<td><input name="sub2" type="int"><br>
</td></h3>
</tr>
<tr>
<td style="text-align: left;"><h3>STUDENT 3 *<br>
</td>
<td><input name="sub3" type="int"><br>
</td></h3>
</tr>
<tr>
<td style="text-align: left;"><h3>STUDENT 4 *<br>
</td>
<td><input name="sub4" type="int"><br>
</td></h3>
</tr>
<tr>
<td style="text-align: left;"><h3>PROJECT TITLE *<br>
</td>
<td><input name="tit" type="int"><br>
</td></h3>
</tr>
<tr>
<td style="text-align: left;"><h3>FACULTY INCHARGE *<br>
</td>
<td><input name="faculty" type="int"><br>
</td></h3>
</tr>
</tbody>
  </table>
  <br>
  <br>
  <h4><input  name ="login" id="login" type="submit"></h4><br>
  <br>
  </center>
</form>
<big><big><br>
</big></big>
</div>
</body>
</html>
  <div id="footer">
  	<div class="copyright">   
        </div>
        <div class="center_footer"style:"text-align:center">COMPUTER SCIENCE DEPARTMENT</div>  
   

</div>

    </div> </div> 
</body>
</html>
