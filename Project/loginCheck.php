
<?php
session_start();
?>
<?php

$host="localhost";
$db_user="root";
$db_password="";
$db_name="sms";

$con=mysqli_connect($host,$db_user,$db_password,$db_name);

	$name=$_POST['name'];
	$password=$_POST['password'];
	$query=mysqli_query($con,"select * from admin where adminUsername = '$name' AND adminPassword= '$password' ");
//	echo $query;
	$row=mysqli_num_rows($query);
	if($row>0)
	{
		?>
		<script>alert("Login successfully..!!");</script>
		<?php
		session_destroy();
		session_start();
		$_SESSION["username"] = $_POST['name'];

		if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {

		header('Location: admin.php');
		exit();
		echo "<span style='color:green;'>Found</span>";
		}
		else{
			echo "<script>alert('Session error');</script>";
			}
	}
	$q2="select * from teacher where Tusername='$name' AND Tpassword='$password'";
	echo "<script>alert('".$q2."')</script>";

	$query2=mysqli_query($con,$q2);
	$row2=mysqli_num_rows($query2);
	
	if($row2>0){
		?>
		<script>alert("Login successfully..!!");</script>
		<?php
		session_destroy();
		session_start();
		$_SESSION["username"] = $_POST['name'];

		if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {

		header('Location: teacher.php');
		exit();
		echo "<span style='color:green;'>Found</span>";
		}
		else{
			echo "<script>alert('Session error');</script>";
			}
	}

	$q3="select * from student where Susername='$name' AND Spassword='$password'";
	echo "<script>alert('".$q3."')</script>";

	$query3=mysqli_query($con,$q3);
	$row3=mysqli_num_rows($query3);
	if($row3>0){
		?>
		<script>alert("Login successfully..!!");</script>
		<?php
		session_destroy();
		session_start();
		$_SESSION["username"] = $_POST['name'];

		if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {

		header('Location: student.php');
		exit();
		echo "<span style='color:green;'>Found</span>";
		}
		else{
			echo "<script>alert('Session error');</script>";
			}
	}
	else
	{
		echo "<script>alert('".$q2."')</script>";
		?>
		<script>alert("Login Error..!!");</script>
		<?php
		header('Location: index.html');
		exit();
		echo "<span style='color:red;'>Username not found</span>";
	}
?>