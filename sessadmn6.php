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
<center class="print">
<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
session_start();
$stream=$_SESSION['stream10'];
$year=$_SESSION['year10'];
$sess=$_SESSION['sessional10'];

if($sess=="1")
	{
		if($year== "1")
		{
			if($stream == "MBA.Tech")
			{
$myQuery = "select * from mba_1"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from mba_1"; 
$res = mysql_query($qry); 
$sql = "SELECT * from mba_1";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }	
			}
			else if($stream == "B.Tech")
			{
				$myQuery = "select * from b_1"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from b_1"; 
$res = mysql_query($qry); 
$sql = "SELECT * from b_1";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }
			}
		}
		else if($year== "2")
		{
			if($stream == "MBA.Tech")
			{
				$myQuery = "select * from mba_2"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from mba_2"; 
$res = mysql_query($qry); 
$sql = "SELECT * from mba_2";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }
			}
			else if($stream == "B.Tech")
			{
				$myQuery = "select * from b_2"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from b_2"; 
$res = mysql_query($qry); 
$sql = "SELECT * from b_2";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }
			}
		}
		else if($year== "3")
		{
			if($stream == "MBA.Tech")
			{
				$myQuery = "select * from mba_3"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from mba_3"; 
$res = mysql_query($qry); 
$sql = "SELECT * from mba_3";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }
			}
			else if($stream == "B.Tech")
			{
				$myQuery = "select * from b_3"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from b_3"; 
$res = mysql_query($qry); 
$sql = "SELECT * from b_3";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }
			}
		}
		else if($year== "4")
		{
			if($stream == "B.Tech")
			{
			$myQuery = "select * from b_4"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from b_4"; 
$res = mysql_query($qry); 
$sql = "SELECT * from b_4";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }
			}
		}
	}
	else if($sess=="2")
	{
		if($year== "1")
{
if($stream == "MBA.Tech")
{
$myQuery = "select * from mba_12"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from mba_12"; 
$res = mysql_query($qry); 
$sql = "SELECT * from mba_12";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }
}
else if($stream == "B.Tech")
{
$myQuery = "select * from b_12"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from b_12"; 
$res = mysql_query($qry); 
$sql = "SELECT * from b_12";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }
}
}
else if($year== "2")
{
if($stream == "MBA.Tech")
{
$myQuery = "select * from mba_22"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from mba_22"; 
$res = mysql_query($qry); 
$sql = "SELECT * from mba_22";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }
}
else if($stream == "B.Tech")
{
$myQuery = "select * from b_22"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from b_22"; 
$res = mysql_query($qry); 
$sql = "SELECT * from b_22";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }}
}
else if($year== "3")
{
if($stream == "MBA.Tech")
{
$myQuery = "select * from mba_32"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from mba_32"; 
$res = mysql_query($qry); 
$sql = "SELECT * from mba_32";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }
}
else if($stream == "B.Tech")
{
$myQuery = "select * from b_32"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from b_32"; 
$res = mysql_query($qry); 
$sql = "SELECT * from b_32";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="60%">
 <?php
		 for ($i = 1; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }
}
}
else if($year== "4")
{
if($stream == "B.Tech")
{
$myQuery = "select * from b_42"; 
$result = mysql_query($myQuery); 
$row = mysql_fetch_row($result); 
$columnCount = count($row);
$qry="select * from b_42"; 
$res = mysql_query($qry); 
$sql = "SELECT * from b_42";
$result = mysql_query($sql);
    ?>
<center>
    <table border="2" >
    <table width="40%">
 <?php
		 for ($i = 1; $i < 4; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 1; $i < 4; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }}
}
}?>
<center>
    <table border="2" >
    <table width="20%">
 <?php
		 for ($i = 4; $i < $columnCount; $i++) {
		 print "<th>";
        echo '<h3>'.mysql_field_name($result,$i).'</h3>'; 
		print "</th> ";}
   while ($row1 = mysql_fetch_array($res))
    {
		print "<tr>";
		for ($i = 4; $i < $columnCount; $i++) {
		 print "<td>";
        echo '<h3>'.$row1[$i].'</h3>'; 
		print "</td> ";}print "</tr>";       
    }



	?>
    <br/>
</div><br/>
</table></table>
</center>
<br>
<center>
<form><input type="button" value=" Print this page "onclick="window.print();return false;" /></form><br/><br/>
</center>
<br/><br/><br/>
</div>
<div id="footer">
  	<div class="copyright">   
        </div>
        <div class="center_footer"style:"text-align:center">COMPUTER SCIENCE DEPARTMENT</div>  
</div>
</body>
</html>

  