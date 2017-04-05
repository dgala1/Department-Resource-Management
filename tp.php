<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="stylesheet" href="print.css"type="text/css" media="print" />
</head>

<body>
<div id="main_container">
	<div class="header">   
    	<div class="right_header">       	       
 <div >
                <ul id="navlist"><li id="active"><br /><a class="current" href="dept.php" title="" style:"float:right;">Home</a>     </li><br/><br /><br /> <br><br>                                        
 				 <li id="active"><a href="profile.php" title="" style:"float:left;">FACULTY</a></li>
                    <li id="active"><a href="info.php" id="current">LOAD ADJUSTMENT</a> <br /><br /></li>
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
<center class="print">
<div id="header" style="background-color:#00CCFF;text-align:center;">
<h1 style="margin-bottom:0;">TIME _ TABLE</h1></div>
<div id="header" style="background-color:#00CCFF;text-align:center;">
<h1 style="margin-bottom:0;"><?php
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
session_start();
$stream2=$_SESSION['stream2'];
$year2=$_SESSION['year2'];
 echo '<h3>'.$stream2. -$year2.'</h3>';
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
 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[0]))
				{
				}
				else
				{
 				 echo $row1[0].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[0]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[1]))
				{
				}
				else
				{
 				 echo $row1[1].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[1]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[2]))
				{
				}
				else
				{
 				 echo $row1[2].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[2]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[3]))
				{
				}
				else
				{
 				 echo $row1[3].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[3]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[$year2]))
				{
				}
				else
				{
 				 echo $row1[$year2].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[$year2]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[5]))
				{
				}
				else
				{
 				 echo $row1[5].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[5]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[6]))
				{
				}
				else
				{
 				 echo $row1[6].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[6]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[7]))
				{
				}
				else
				{
 				 echo $row1[7].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from monday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[7]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  echo'</center>';
		  
?> 

</div>
<div id="content" style="height:659px;width:131px;float:left;">
<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
echo'<center>';
echo '<br /><h3>TUESDAY</h3><br />';
 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[0]))
				{
				}
				else
				{
 				 echo $row1[0].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[0]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[1]))
				{
				}
				else
				{
 				 echo $row1[1].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[1]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[2]))
				{
				}
				else
				{
 				 echo $row1[2].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[2]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[3]))
				{
				}
				else
				{
 				 echo $row1[3].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[3]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[$year2]))
				{
				}
				else
				{
 				 echo $row1[$year2].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[$year2]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[5]))
				{
				}
				else
				{
 				 echo $row1[5].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[5]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[6]))
				{
				}
				else
				{
 				 echo $row1[6].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[6]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[7]))
				{
				}
				else
				{
 				 echo $row1[7].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from tuesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[7]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  echo'</center>';
		  
?>  

</div>
<div id="content" style="height:659px;width:131px;float:left;">

<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
echo'<center>';
echo '<br /><h3>WEDNESDAY</h3><br />';
   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[0]))
				{
				}
				else
				{
 				 echo $row1[0].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[0]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[1]))
				{
				}
				else
				{
 				 echo $row1[1].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[1]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[2]))
				{
				}
				else
				{
 				 echo $row1[2].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[2]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[3]))
				{
				}
				else
				{
 				 echo $row1[3].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[3]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[$year2]))
				{
				}
				else
				{
 				 echo $row1[$year2].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[$year2]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[5]))
				{
				}
				else
				{
 				 echo $row1[5].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[5]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[6]))
				{
				}
				else
				{
 				 echo $row1[6].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[6]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[7]))
				{
				}
				else
				{
 				 echo $row1[7].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from wednesday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[7]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  echo'</center>';
		  
?>  
</div>
<div id="content" style="height:659px;width:131px;float:left;">
<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
echo'<center>';
echo '<br /><h3>THURSDAY</h3><br />';
 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[0]))
				{
				}
				else
				{
 				 echo $row1[0].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[0]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[1]))
				{
				}
				else
				{
 				 echo $row1[1].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[1]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[2]))
				{
				}
				else
				{
 				 echo $row1[2].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[2]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[3]))
				{
				}
				else
				{
 				 echo $row1[3].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[3]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[$year2]))
				{
				}
				else
				{
 				 echo $row1[$year2].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[$year2]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[5]))
				{
				}
				else
				{
 				 echo $row1[5].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[5]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[6]))
				{
				}
				else
				{
 				 echo $row1[6].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[6]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[7]))
				{
				}
				else
				{
 				 echo $row1[7].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from thursday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[7]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  echo'</center>';
		  
?> 

</div>
<div id="content" style="height:659px;width:130px;float:left;">
<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
echo'<center>';
echo '<br /><h3>FRIDAY</h3><br />';
 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[0]))
				{
				}
				else
				{
 				 echo $row1[0].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[0]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[1]))
				{
				}
				else
				{
 				 echo $row1[1].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[1]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[2]))
				{
				}
				else
				{
 				 echo $row1[2].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[2]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[3]))
				{
				}
				else
				{
 				 echo $row1[3].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[3]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[$year2]))
				{
				}
				else
				{
 				 echo $row1[$year2].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[$year2]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[5]))
				{
				}
				else
				{
 				 echo $row1[5].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[5]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[6]))
				{
				}
				else
				{
 				 echo $row1[6].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[6]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[7]))
				{
				}
				else
				{
 				 echo $row1[7].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from friday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[7]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  echo'</center>';
		  
?> 

</div>
<div id="content" style="height:659px;width:130px;float:left;">
<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
echo'<center>';
echo '<br /><h3>SATURDAY</h3><br />';
 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[0]))
				{
				}
				else
				{
 				 echo $row1[0].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[0]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[1]))
				{
				}
				else
				{
 				 echo $row1[1].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[1]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		 $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[2]))
				{
				}
				else
				{
 				 echo $row1[2].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[2]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[3]))
				{
				}
				else
				{
 				 echo $row1[3].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[3]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		   $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[$year2]))
				{
				}
				else
				{
 				 echo $row1[$year2].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[$year2]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[5]))
				{
				}
				else
				{
 				 echo $row1[5].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[5]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[6]))
				{
				}
				else
				{
 				 echo $row1[6].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[6]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  
		    $resource = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		echo '<hr>';
		echo '<br />';
		  while($row1 = mysql_fetch_array($resource))
		{
				if(empty($row1[7]))
				{
				}
				else
				{
 				 echo $row1[7].'/';
				 }
		}
		echo '<br />';
		$resource1 = mysql_query("select nine,ten,eleven,twelve,one,two,three,four from saturday where stream='$stream2' && year='$year2'");
		 while($row11 = mysql_fetch_array($resource1))
		{	
		$row2=mysql_query("select facname from subject where subname='$row11[7]'");
						  while($qry1 = mysql_fetch_array($row2))
		  {
		  if(empty($qry1[0]))
				{
				}
				else
				{
 				 echo $qry1[0].'/';
				 }
			}
		  }
		  echo '<br />';echo '<br />';
		  echo'</center>';
		  
?>  

</div>
</center>
<br>
<center>
<form><input type="button" value=" Print this page "onclick="window.print();return false;" /></form><br/><br/>
</center>

</div>
<body>

</body>
</html>
</div>

