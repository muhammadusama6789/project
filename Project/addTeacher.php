<?php

$fname=$_POST['tfname'];
$lname=$_POST['tlname'];
$cnic=$_POST['tcnic'];
$cellno=$_POST['tcellno'];
$username=$_POST['tusername'];
$password=$_POST['tpassword'];
$fathername=$_POST['tfathername'];
$fathercnic=$_POST['tfathercnic'];
$gender=$_POST['tgender'];
$dob=$_POST['tdob'];
$class=$_POST['Class'];
$subject=$_POST['subject'];
$position=$_POST['position'];
//data for address table
$hno=$_POST['thno'];
$sno=$_POST['tsno'];
$city=$_POST['tcity'];
$country=$_POST['tcountry'];
$salary =$_POST['salary'];
$section=$_POST['section'];
require "connection.php";

$addressQuery="INSERT INTO `address`(`houseNo`, `streeNo`, `City`, `country`) VALUES ('$hno','$sno','$city','$country');";
//echo '<script>alert("'.$addressQuery.'");</script>';

//echo "<script>alert('hi');</script>";
$result1=mysqli_query($con,$addressQuery);
if($result1){
	$ct = "select * from address";
	$row=mysqli_query($con,$ct);
	while($fetch=mysqli_fetch_row($row))
		$total=$fetch[0];
//echo $dob;
	$teacherQuery= "INSERT INTO `teacher`(`Tfname`, `Tlname`, `teacherOf`, `Tusername`, `Tpassword`, `Tfathername`, `gender`, `DOB`, `Tsalary`, `TCNIC`, `TFCNIC`, `TPosition`, `TcontactNo`, `TAid`) VALUES ('$fname','$lname','$subject','$username','$password','$fathername','$gender','$dob','$salary','$cnic','$fathercnic','$position','$cellno','$total');";

//echo $teacherQuery;
	$result2=mysqli_query($con,$teacherQuery);
	if($result2){
		echo "success";

		$quer = "SELECT max(Tid) FROM teacher ";
		$r=mysqli_query($con,$quer);
		$ro=mysqli_fetch_row($r);

		//echo "<br>".$ro[0];
		//echo '<script>alert("'.$ro.'");</script>';

		$i2="SELECT CourseId FROM courses WHERE CourseName='$subject';";
		$r2=mysqli_query($con,$i2);
		$ro2=mysqli_fetch_row($r2);

		//echo "<br>".$ro2[0];


		$i3="SELECT SectionId FROM section WHERE SclassId='$class';";
		$r3=mysqli_query($con,$i3);
		$ro3=mysqli_fetch_row($r3);

		//echo "<br>".$ro3[0];	

		//now for teachervsALL
		$in="INSERT INTO `teachervsall`(`teacherId`, `secId`, `classId`, `courseId`, `studentId`) VALUES ('$ro[0]','$ro3[0]','$class','$ro2[0]','1')";
		//echo $in;

		$r4=mysqli_query($con,$in);
		$ro4=mysqli_fetch_row($r4);
	}
	else{
		echo "failed";
	}
}
?>