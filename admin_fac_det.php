<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
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

$name=$_POST['username'];
$qry="select * from staff where firstname='$name' ";
$result=mysql_query($qry);

while ($row = mysql_fetch_array($result)){
?>
<br /> <br /><br /> <br />
<center>
<big><big><h3>DEPARTMENT&nbsp; RESOURCE MANAGEMENT</h3><br>
</big></big>

    <table border="2" >
    <table width="40%">
      <tr class="yellow">
      
<tr><th>FACULTY ID</th><td>
    <?php
	 // print "<td>";
      echo '<h3>'.$row['fid'].'</h3>'; 
      //print "</td>";
	?></td></tr>
    
<tr><th>FIRST NAME</th><td>
    <?php
	 // print "<td>";
      echo '<h3>'.$row['firstname'].'</h3>'; 
      //print "</td>";
	?></td></tr>
    
<tr><th>PASSWORD</th><td>
    <?php
	 // print "<td>";
      echo '<h3>'.$row['password'].'</h3>'; 
      //print "</td>";
	?></td></tr>
    
<tr><th>PHONE NUMBER</th><td>
    <?php
	 // print "<td>";
      echo '<h3>'.$row['phoneno'].'</h3>'; 
      //print "</td>";
	?></td></tr>
    
<tr><th>EMAIL_ID</th><td>
    <?php
	 // print "<td>";
      echo '<h3>'.$row['emailid'].'</h3>'; 
      //print "</td>";
	?></td></tr>
    
<tr><th>DESIGNATION</th><td>
    <?php
	 // print "<td>";
      echo '<h3>'.$row['designation'].'</h3>'; 
      //print "</td>";
	?></td></tr>
    
<tr><th>QUALIFICATION</th><td>
    <?php
	 // print "<td>";
      echo '<h3>'.$row['qualification'].'</h3>'; 
      //print "</td>";
	?></td></tr>
    
<tr><th>AREA OF INTEREST</th><td>
    <?php
	 // print "<td>";
      echo '<h3>'.$row['aoe'].'</h3>'; 
      //print "</td>";
	}?></td></tr>
    
<br /> <br />	      
</table></table></center>
<br /> <br /><br /> <br />
 <div id="footer">
  	<div class="copyright">   
        </div>
        <div class="center_footer"style:"text-align:center">COMPUTER SCIENCE DEPARTMENT</div>  
</div>
      
</div>
</body>
</html>








