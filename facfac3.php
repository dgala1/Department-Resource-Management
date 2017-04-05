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

<style type="text/css">
table, td, th
{
border:1px solid green;
}
th
{
background-color:green;
color:white;
}
div
{
   border:1px solid;
}
.divtable
{
    display:table;
}
.divrow
{
    display:table-row;
border:1px solid;
    
}
.divcol
{
    display:table-cell;
    width:100px;
}
.headrow
{
    display:table-caption;
}

.content
{
    display:table-cell;
    width:100px;
}
</style>
    <title></title>
</head>

<div id="header" style="background-color:#00CCFF;text-align:center;">
<h1 style="margin-bottom:0;">TIME _ TABLE</h1></div>
<div id="header" style="background-color:#00CCFF;text-align:center;">
<h1 style="margin-bottom:0;"><?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
session_start();
$stream=$_SESSION['stream'];
$year=$_SESSION['year'];
$facname=$_SESSION['code'];
 echo '<h3>'.$facname.'</h3>';
?></h1></div>
<div id="content" style="height:659px;width:100px;float:left;">
<?php
echo'<center>';
echo '<br /><h3>TIME / DAY</h3><br />';
echo '<hr>';
echo '<br /><h3> 9 - 10 </h3><br />';
echo '<hr>';
echo '<br /><h3> 10 - 11 </h3><br />';
echo '<hr>';
echo '<br /><h3> 11 - 12 </h3><br />';
echo '<hr>';
echo '<br /><h3> 12 - 1 </h3><br />';
echo '<hr>';
echo '<br /><h3> 1 - 2 </h3><br />';
echo '<hr>';
echo '<br /><h3> 2 - 3 </h3><br />';
echo '<hr>';
echo '<br /><h3> 3 - 4 </h3><br />';
echo '<hr>';
echo '<br /><h3> 4 - 5 </h3><br />';
echo '<hr>';

echo'</center>';
?>
</div>
<div id="content" style="height:659px;width:131px;float:left;">
<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
echo'<center>';
echo '<br /><h3>MONDAY</h3><br />';
 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from facmon where facname='$facname'");
		  $row1 = mysql_fetch_array($resource);
		 for ($x=0; $x<=7; $x++)
		  {echo '<hr>';
		  if(empty($row1[$x]))
		  {
		  			echo'<br /><br /><br /><br />';
		}
		else
		{
 				 echo '<h3>'.$row1[$x].'</h3>';
				 $row2=mysql_query("select facname from subject where subname='$row1[$x]'");
				 $qry1 = mysql_fetch_array($row2);
				  for ($y=0; $y<1; $y++)
		  {
				 echo '<h3>'.$qry1[$y].'</h3>';
			}
			}
		  }
		  echo'</center>';
		  
?> 

</div>
<div id="content" style="height:659px;width:131px;float:left;">
<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
echo'<center>';
echo '<br /><h3>TUESDAY</h3><br />';
 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from factue where facname='$facname'");
		  $row1 = mysql_fetch_array($resource);
		 for ($x=0; $x<=7; $x++)
		  {echo '<hr>';
		    if(empty($row1[$x]))
		  {
		  			echo'<br /><br /><br /><br />';
		}
		else
		{
 				 echo '<h3>'.$row1[$x].'</h3>';
				 $row2=mysql_query("select facname from subject where subname='$row1[$x]'");
				 $qry1 = mysql_fetch_array($row2);
				  for ($y=0; $y<1; $y++)
		  {
				 echo '<h3>'.$qry1[$y].'</h3>';
			} }
		  }echo'</center>';
?> 
</div>
<div id="content" style="height:659px;width:131px;float:left;">

<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
echo'<center>';
echo '<br /><h3>WEDNESDAY</h3><br />';
 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from facwed where facname='$facname'");
		  $row1 = mysql_fetch_array($resource);
		 for ($x=0; $x<=7; $x++)
		  {echo '<hr>';
		    if(empty($row1[$x]))
		  {
		  			echo'<br /><br /><br /><br />';
		}
		else
		{
 				 echo '<h3>'.$row1[$x].'</h3>';
				 $row2=mysql_query("select facname from subject where subname='$row1[$x]'");
				 $qry1 = mysql_fetch_array($row2);
				  for ($y=0; $y<1; $y++)
		  {
				 echo '<h3>'.$qry1[$y].'</h3>';
			} }
		  }echo'</center>'; 
?> 
</div>
<div id="content" style="height:659px;width:131px;float:left;">
<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
echo'<center>';
echo '<br /><h3>THURSDAY</h3><br />';
 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from facthur where facname='$facname'");
		  $row1 = mysql_fetch_array($resource);
		 for ($x=0; $x<=7; $x++)
		  {echo '<hr>';
		    if(empty($row1[$x]))
		  {
		  			echo'<br /><br /><br /><br />';
		}
		else
		{
 				 echo '<h3>'.$row1[$x].'</h3>';
				 $row2=mysql_query("select facname from subject where subname='$row1[$x]'");
				 $qry1 = mysql_fetch_array($row2);
				  for ($y=0; $y<1; $y++)
		  {
				 echo '<h3>'.$qry1[$y].'</h3>';
			}}
		  }echo'</center>'; 
?> 

</div>
<div id="content" style="height:659px;width:130px;float:left;">
<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
echo'<center>';
echo '<br /><h3>FRIDAY</h3><br />';
 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from facfri where facname='$facname'");
		  $row1 = mysql_fetch_array($resource);
		 for ($x=0; $x<=7; $x++)
		  {echo '<hr>';
		    if(empty($row1[$x]))
		  {
		  			echo'<br /><br /><br /><br />';
		}
		else
		{
 				 echo '<h3>'.$row1[$x].'</h3>';
				 $row2=mysql_query("select facname from subject where subname='$row1[$x]'");
				 $qry1 = mysql_fetch_array($row2);
				  for ($y=0; $y<1; $y++)
		  {
				 echo '<h3>'.$qry1[$y].'</h3>';
			}}
					  }echo'</center>'; 
?> 

</div>
<div id="content" style="height:659px;width:130px;float:left;">
<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
echo'<center>';
echo '<br /><h3>SATURDAY</h3><br />';
 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from facsat where facname='$facname'");
		  $row1 = mysql_fetch_array($resource);
		 for ($x=0; $x<=7; $x++)
		  {echo '<hr>';
		    if(empty($row1[$x]))
		  {
		  			echo'<br /><br /><br /><br />';
		}
		else
		{
 				 echo '<h3>'.$row1[$x].'</h3>';
				 $row2=mysql_query("select facname from subject where subname='$row1[$x]'");
				 $qry1 = mysql_fetch_array($row2);
				  for ($y=0; $y<1; $y++)
		  {
				 echo '<h3>'.$qry1[$y].'</h3>';
			}}
			
		  }echo'</center>'; 
?> 
</div>
</div>
<body>
<div id="footer">
  	<div class="copyright">   
        </div>
        <div class="center_footer"style:"text-align:center">COMPUTER SCIENCE DEPARTMENT</div>  
   

</div>

</body>
</html>

