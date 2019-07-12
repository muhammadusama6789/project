<?php



$fname=$_POST['fname'];
$lname=$_POST['lname'];
$cnic=$_POST['cnic'];
$cellno=$_POST['cellno'];
$username=$_POST['username'];
$password=$_POST['password'];
$fathername=$_POST['fathername'];
$fatheroccupation=$_POST['fatheroccupation'];
$fathercnic=$_POST['fathercnic'];
$fathercellno=$_POST['fathercellno'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];

//data for address table
$hno=$_POST['hno'];
$sno=$_POST['sno'];
$city=$_POST['city'];
$country=$_POST['country'];
$class=$_POST['Class'];

require "connection.php";

$addressQuery="INSERT INTO `address`(`houseNo`, `streeNo`, `City`, `country`) VALUES ('$hno','$sno','$city','$country');";
//echo '<script>alert("'.$addressQuery.'");</script>';

//echo "<script>alert('hi');</script>";

$result1=mysqli_query($con,$addressQuery);
if($result1){
	//echo "<script>alert('hi');</script>";

	$ct = "select * from address";
	$row=mysqli_query($con,$ct);
	while($fetch=mysqli_fetch_row($row))
	$total=$fetch[0];
//	echo '<script>alert("'.$total.'");</script>';

	$qr="select * from class where Cid='$class';";
	$secquery=mysqli_query($con,$qr);
	if($secquery){
		//echo '<script>alert("'.$qr.'");</script>';
	}
	$secdata=mysqli_fetch_row($secquery);
		
	$totalStudent=$secdata[3];
	$section='A';

	//echo '<script>alert("'.$totalStudent.'");</script>';

	if($totalStudent>=0 && ($totalStudent%5!=0 || $totalStudent==0))//check below 5 or not 
	{
		
		$ss=mysqli_query($con,"select * from section where SclassId='$class';");
		while($roww=mysqli_fetch_row($ss)){
			$secID=$roww[0];
		}
		//echo '<script>alert("'.$secID.'");</script>';
		//echo "<script>alert('hi pehly wala chlyga section');</script>";
	}
	else{//section updation work here in this else block 
//	echo "<script>alert('new section required now');</script>";
	
		$ss=mysqli_query($con,"select * from section where SclassId='$class';");
		$ct=mysqli_num_rows($ss);
		$i=0;
		if($ct>1){
			while($ssresult=mysqli_fetch_row($ss)){
				$oldSection=$ssresult[1];
				$oldSection++;
				$i++;
				$section=$oldSection;
				if($i==$ct)
					break;
			}	
		}
		else{
			$ssresult=mysqli_fetch_row($ss);
			$oldSection=$ssresult[1];
			$oldSection++;
		}
		//echo '<script>alert("'.$oldSection.'");</script>';
		
		mysqli_query($con,"INSERT INTO `section`( `SectionName`, `SclassId`, `ScourseId`) VALUES ('$oldSection','$class','1');"); //query to create dynamically new sections
		
		$querysecid="select * from section where SclassId='$class';";

		$ss=mysqli_query($con,$querysecid);
		$ct=mysqli_num_rows($ss);
		//echo '<script>alert("'.$ct.'");</script>';
		//echo '<script>alert("'.$querysecid.'");</script>';
		if($ct>1){	
			$secID=0;
			while($ssresult=mysqli_fetch_row($ss)){
				$secID=$ssresult[0];
			}
		}
		echo '<script>alert("'.$secID.'");</script>';
	}
	$query= "INSERT INTO `student`(`Sfname`, `Slname`, `Sfathername`, `Susername`, `Spassword`, `DOB`, `gender`, `sCNIC`, `sFCNIC`, `sCid`, `sFOccupation`, `contactNo`, `sAid`, `SSectionId`, `SAttendance`) VALUES
	 ('$fname','$lname','$fathername','$username','$password','$dob','$gender','$cnic','$fathercnic','$class','$fatheroccupation','$cellno','$total','$secID','0');";

	//echo '<script>alert("'.$query.'");</script>';
	//exit();
	$result=mysqli_query($con,$query);
	if($result){

		mysqli_query($con,"
   			 UPDATE class 
    		SET CTotalStudent = CTotalStudent + 1
    		WHERE Cid = '".$class."'
		");
			//echo "<script>alert('hi after increment');</script>";

		//end increment code
		echo "<script>alert('Added Data successfully...!!');</script>";
	}

}
?>