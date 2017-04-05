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

<?php 
$con = mysql_connect("localhost","root","") or die("Database not selected");
mysql_select_db("department",$con)or die("Database not selected");
session_start();


?>
<center><br/><br/><br/><br/><br/>
<a href="profile3.php"><h3>EDIT DETAILS</h3></a>
<br /><br />
<a href="show_det.php"><h3>SHOW DETAILS</h3></a>

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
