<?php
if ($_FILES["file"]["error"] > 0)
{
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
}
else
{
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
    //echo "Stored in: " . $_FILES["file"]["tmp_name"];
	$a=$_FILES["file"]["tmp_name"];
	//echo $a;
 
	$connect = mysql_connect('localhost','root','');
if (!$connect) {
die('Could not connect to MySQL: ' . mysql_error());
}	
//your database name
$cid =mysql_select_db('department',$connect);
 session_start();
$stream=$_SESSION['stream'];
$year=$_SESSION['year'];
// path where your CSV file is located
//define('CSV_PATH','C:/xampp/htdocs/');
//<!-- C:\xampp\htdocs -->
// Name of your CSV file
$csv_file = $a; 
 
if (($getfile = fopen($csv_file, "r")) !== FALSE) {
         $data = fgetcsv($getfile, 1000, ",");
   while (($data = fgetcsv($getfile, 1000, ",")) !== FALSE) {
     $num = count($data);
	   //echo $num;
       // for ($c=0; $c < $num; $c++) {
            $result = $data;
        	$str = implode(",", $result);
        	$slice = explode(",", $str);
 
            $col1 = $slice[0];
            $col2 = $slice[1];
            $col3 = $slice[2];
			
if($year== "1")
{
if($stream == "MBA.Tech")
{
$qry="INSERT INTO `department`.`mba_1` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result=mysql_query($qry);
$qry2="INSERT INTO `department`.`mba_12` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result2=mysql_query($qry2);

}
else if($stream == "B.Tech")
{
$qry="INSERT INTO `department`.`b_1` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result=mysql_query($qry);
$qry2="INSERT INTO `department`.`b_12` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result2=mysql_query($qry2);
}
}
else if($year== "2")
{
if($stream == "MBA.Tech")
{
$qry="INSERT INTO `department`.`mba_2` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result=mysql_query($qry);
$qry2="INSERT INTO `department`.`mba_22` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result2=mysql_query($qry2);

}
else if($stream == "B.Tech")
{
//$query = "INSERT INTO `department`.`b_2`(srno,Roll,SAP,Name) VALUES(NULL,'".$col1."','".$col2."','".$col3."')";
//$s=mysql_query($query, $connect );
//$query2 = "INSERT INTO`department`.`b_22`(srno,Roll,SAP,Name) VALUES(NULL,'".$col1."','".$col2."','".$col3."')";
//$s2=mysql_query($query2, $connect );
$qry="INSERT INTO `department`.`b_2` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result=mysql_query($qry);
$qry2="INSERT INTO `department`.`b_22` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result2=mysql_query($qry2);
}
}else if($year== "3")
{
if($stream == "MBA.Tech")
{
$qry="INSERT INTO `department`.`mba_3` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result=mysql_query($qry);
$qry2="INSERT INTO `department`.`mba_32` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result2=mysql_query($qry2);

}
else if($stream == "B.Tech")
{
$qry="INSERT INTO `department`.`b_3` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result=mysql_query($qry);
$qry2="INSERT INTO `department`.`b_32` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result2=mysql_query($qry2);
}
}
else if($year== "4")
{
if($stream == "B.Tech")
{
$qry="INSERT INTO `department`.`b_4` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result=mysql_query($qry);
$qry2="INSERT INTO `department`.`b_42` (`Rollno`,`SAP`,`Name`) VALUES ('".$col1."','".$col2."','".$col3."');";
$result2=mysql_query($qry2);
$qry9="INSERT INTO `department`.`studentname` (`stream`,`year`,`Roll`,`SAP`,`Name`) VALUES ('$stream','$year','".$col1."','".$col2."','".$col3."');";
$result9=mysql_query($qry9);
}
}
}
//$query = "INSERT INTO studentname(srno,stream,year,Roll,SAP,Name) VALUES(NULL,'$strm','$yr','".$col1."','".$col2."','".$col3."')";
//$s=mysql_query($query, $connect );
}
}//}
echo "<script>alert('Record successfully uploaded.');</script>";
//header("Location:sessadmn1.php");
//echo "File data successfully imported to database!!";
mysql_close($connect);

?>