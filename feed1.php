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
<link rel="stylesheet" href="print.css"type="text/css" media="print" />
</head>

<body>
<div id="main_container">
	<div class="header">   <img src="images/lg.jpg.jpg" alt="" title="" width="300" height="74" border="0" />
    	<div class="right_header">       	       
 <div >
                <ul id="navlist">     <br /><br /><br /> <br><br>                                        
 				` <li id="active"><a href="newcss.php" title="" style:"float:left;">FACULTY</a></li>
                    <li id="active"><a href="info.php" id="current">LOAD ADJUSTMENT</a> <br /><br /></li>
                    <li id="active"><a href="seminar.php" id="current">SEMINAR</a> <br /><br /></li>
                    <li id="active"><a href="feed.php" id="current">FEEDBACK</a> <br /><br /></li>
                    <li id="active"><a href="table.php" id="current">TIMETABLE</a> <br /><br /></li>
                     </li> <li><a class="current" href="login.php" title="" style:"float:center;">SESSIONALS</a></li>
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
$stream=$_POST['str'];
$year=$_POST['year'];
$qry="select subject,faculty,status from feedback where stream='$stream' && year='$year' ";
$result=mysql_query($qry);
    ?>
<center class="print">
    <table border="2" >
    <table width="40%">
    
        <tr class="yellow">
            <th>  SUBJECT </th>
            <th>  FACULTY  </th>
            <th>  STATUS  </th>
        </tr>
         <?php
   while ($row = mysql_fetch_array($result))
    {
        print "<tr><td>";
        echo '<h3>'.$row[0].'</h3>'; 
        print "</td><td>";
        echo '<h3>'.$row[1].'</h3>'; 
        print "</td><td>";
        echo '<h3>'.$row[2].'</h3>'; 
        print "</td> </tr>";
    }
	}
	?>
    <br/>
</div><br/>
</table></table><br/>
<center>
<form><input type="button" value=" Print this page "onclick="window.print();return false;" /></form><br/><br/>
</center><br/><br/><br/>
</div>
<div id="footer">
  	<div class="copyright">   
        </div>
        <div class="center_footer"style:"text-align:center">COMPUTER SCIENCE DEPARTMENT</div>  
</div>
</body>
</html>

  