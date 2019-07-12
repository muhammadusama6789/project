<?php

$index=$_POST['index'];

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
$aid=$_POST['aid'];
$hno=$_POST['hno'];
$sno=$_POST['sno'];
$city=$_POST['city'];
$country=$_POST['country'];


require "connection.php";

//$addressQuery="UPDATE 'address' set houseNo='$hno', streeNo ='$sno', City='$city',country='$country' WHERE Aid='$aid';";
$q="UPDATE `address` SET `houseNo`=$hno,`streeNo`='$sno',`City`='$city',`country`='$country' WHERE Aid='$aid';";
if(mysqli_query($con,$q)){
	?>
	
	<?php


}
else{
?>
	<script >
	alert($q);
		alert("msla hogya h bhai ");
	</script>
	<?php

}

$query="UPDATE `student` 
	SET `Sfname`='$fname',`Slname`='$lname',`Sfathername`='$fathername',`Susername`='$username',`Spassword`='$password',`DOB`='$dob',`gender`='$gender',`sCNIC`='$cnic',`sFCNIC`='$fathercnic',`sFOccupation`='$fatheroccupation',`contactNo`='$cellno' WHERE sCNIC='$index';";
//echo $query;
if(mysqli_query($con,$query)){
	echo "Data is
	 updated successfully";
}
else{
	echo "Error while updation record";
}
?>

