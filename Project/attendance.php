<?php
require "connection.php";

$j=$_POST["size"];
$class=$_POST["Class"];
 $query="SELECT Sid FROM student where Scid='$class';";
// echo $query;
  $result=mysqli_query($con,$query);
  $k=0;

for($i=1; ($row=mysqli_fetch_row($result));$i++){
	//echo $i."<br>";
	if (!ISSET($_POST['options'][$i]) ){
		echo $row[0]."<br>";
		$update="UPDATE student set SAttendance = SAttendance+1 WHERE Sid='$i'";
		mysqli_query($con,$update);
	}
	else{
		echo "present"."<br>";
	}
}
?>