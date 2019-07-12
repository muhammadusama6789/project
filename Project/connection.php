<?php
$host="localhost";
$db_user="root";
$db_password="";
$db_name="sms";

$con=mysqli_connect($host,$db_user,$db_password,$db_name);
if($con){
	//echo "connection done successfully";
}else{
	//echo "connection is not established";
}
?>
