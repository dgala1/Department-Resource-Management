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
                    <li id="active"><a href="info.php" id="current">LOAD ADJUSTMENT</a> <br /><br /></li>
                    <li id="active"><a href="seminar.php" id="current">SEMINAR</a> <br /><br /></li>
                    <li id="active"><a href="feed.php" id="current">FEEDBACK</a> <br /><br /></li>
                    <li id="active"><a href="table.php" id="current">TIMETABLE</a> <br /><br /></li>
                     </li> <li><a class="current" href="sessadmn.php" title="" style:"float:center;">SESSIONALS</a></li>
                 </ul>
            </div>
                  
        </div>
    
    </div>
    
<div id="ab">

<?php

$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected"); 
session_start();
$strm=$_SESSION['stream'];
$yr=$_SESSION['year'];




?><br><br><br>
<body style="
    background-color: rgb(128, 151, 185);
">
 
<form action="sessadmn8.php" method="post" enctype="multipart/form-data">
        <center>
<table width="40%">
    <tr>
        <td><h3>
            Filename:
      </h3>  </td>
        <td>
            <input type="file" name="file" id="file">
        </td>
    </tr>
    </table>
    <table width="20%">
    <tr>
        <td  colspan="5"  align="left">
       <input type="submit" name="submit" value="Submit">
        </td>
    </tr>
</table>
</center>
</form>
</center>
<big><big><br>
</big></big></div>
</body>
</html>
</h3></h3></div>
<div id="footer">
  	<div class="copyright">   
        </div>
        <div class="center_footer"style:"text-align:center">COMPUTER SCIENCE DEPARTMENT</div>  
</div>     
    </div>


 </div> 
</body>
</html>
