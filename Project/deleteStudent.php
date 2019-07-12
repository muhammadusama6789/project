<?php

require "connection.php";

$index=$_POST['index'];



$query1="DELETE FROM `student` WHERE student.sCNIC='$index';";

//to save aid
$q="SELECT sAid,sCid from student where sCNIC='$index';";
$r=mysqli_query($con,$q);
$row=mysqli_fetch_row($r);
$aid=$row[0];
$scid=$row[1];
	echo '<script>alert("'.$aid.'");</script>';

$query = "DELETE FROM address where Aid = '$aid';";

$query2="UPDATE class SET CTotalStudent = CTotalStudent - 1	WHERE Cid ='$scid';";





if(mysqli_query($con,$query1)){
	echo '<script>alert("'.$query1.'");</script>';
	if(mysqli_query($con,$query2)){
		echo '<script>alert("'.$query2.'");</script>';
		if(mysqli_query($con,$query)){
			echo '<script>alert("Data is Deleted...!!");</script>';
		}
	}
}
?>