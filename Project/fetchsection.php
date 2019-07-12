<?php
$class=$_POST["Class"];
require "connection.php";
$row="SELECT * from section where SclassId='$class';";
$result=mysqli_query($con,$row);
//$ct=mysqli_num_rows($result);
echo '<select id="section" name="section" class="form-control" required>';
$i="A";
  while($row=mysqli_fetch_row($result)){
  	$sec=$row[1];
  	echo "<option value='$i'>";
  	echo "$i";
  	echo "</option>";
  	$i++; 
  }         
echo  '</select>';

?>