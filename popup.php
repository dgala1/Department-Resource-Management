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
    
<div id="ab">
<center>
<form method="post" action="popup.php">
<table width="40%">
<tbody>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
session_start();
$name=$_SESSION['name'];
$qwe="request accepted";
$qwe1="request denied";
$qry=mysql_query("select DISTINCT * from swap where facped='$name' && status!='$qwe' && status!='$qwe1'");
while($aa=mysql_fetch_array($qry))
{	
	$a1=$aa['facpng'];
	$a2=$aa['lecpng'];
	$a3=$aa['date'];
	$a4=$aa['time'];
	echo "<br><br><br>";
	echo "<h3> <u>".$a1."</u> wants to swap his <u>".$a2."</u> lecture<br> on <u>".$a3."</u> at <u>".$a4."</u> with you ..<br></h3>";
	echo " <h3>Are you free to take the lecture? </h3><br>";		
	
}
if(isset($_POST['yes']))
{			$lp=$_POST['code'];
echo $lp;
			$ab="request accepted";
			$qry=mysql_query("select DISTINCT * from swap where facped='$name'");
			while($aa=mysql_fetch_array($qry))
			{
			$a1=$aa['facpng'];
			$a2=$aa['lecpng'];
			$a3=$aa['date'];
			$a4=$aa['time'];
			$qry1 = "update swap set status='$ab'  where facpng='$a1' && lecpng='$a2' && facped='$name' && date='$a3' && time='$a4'";
			$result=mysql_query($qry1);	
			$qry11 = "update swap set lecped='$lp'  where facpng='$a1' && lecpng='$a2' && facped='$name' && date='$a3' && time='$a4'";
			$result1=mysql_query($qry11);		
			}
			$qq=0;
			$qry2 = mysql_query("update staff set status='$qq' where firstname='$name' ");
			header("Location:faculty.php");
			
}
elseif(isset($_POST['no']))
{
		$ab="request denied";
			$qry=mysql_query("select DISTINCT * from swap where facped='$name'");
			while($aa=mysql_fetch_array($qry))
			{
			$a1=$aa['facpng'];
			$a2=$aa['lecpng'];
			$a3=$aa['date'];
			$a4=$aa['time'];
			$qry1 = "update swap set status='$ab' where facpng='$a1' && lecpng='$a2' && facped='$name' && date='$a3' && time='$a4'";
			$result=mysql_query($qry1);
			}	
			$qq=0;
			$qry2 = mysql_query("update staff set status='$qq' where firstname='$name' ");
			header("Location:faculty.php");
}
?>
<tr><td style="text-align: left; width:150px;"><h3>Subject u swapping</td>
<td><select name="code">
<option>------Select one------</option>
<?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
$ab=mysql_query("select * from swap where facped='$name'");
$row=mysql_fetch_array($ab);
$fn=$row['facped'];
$st=$row['stream'];
$dt=$row['year'];
echo "1111";
$ab1=mysql_query("select subname from subject where fullname='$fn' && stream='$st' && year='$dt'");
while($ab2= mysql_fetch_array($ab1))
			{
			echo '<option value="'.$ab2['subname'].'">'.$ab2['subname'].'</option>';
			}
		   
		   echo '</select>';

?>
</select></td></h3></tr>
</tbody>
</table>
<button name ="yes" id="yes" type="submit" value="yes" >yes</button>
<button name ="no" id="no" type="submit" value="no">no</button>
</form>



</center>
</div>
</body>
</html>
<div id="footer">
  	<div class="copyright">   
        </div>
        <div class="center_footer"style:"text-align:center">COMPUTER SCIENCE DEPARTMENT</div>  
		</div>
 </div> 
</body>
</html>
