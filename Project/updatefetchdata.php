<!DOCTYPE html>
<html>
<head>
	<title>Update</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>



  <style >

.modal{
	margin-top: 50px;
	border: 1px solid black;
	border-radius: 5px;
}
.modal-content{
	background-color: white;
}
.modal-header{
	background-color: #1a5276;
	color: white;
}
.modal-footer{

	background-color: #1a5276;	
}
.close{
	color: white;
	background-color: white;
	}


  </style>
</head>
<body>
<?php
require "connection.php";

$index=$_POST['index'];

echo "you entered : ".$_POST['index'];

if($_POST['index']!=""){
	$query="select * from student where Scnic='$index';";
	$res=mysqli_query($con,$query);
	if($res){
		if($row=mysqli_fetch_row($res)){
			?>
	<form class="form-horizontal">
        <fieldset>
    	<legend>Personal Information</legend>
    	<input type="hidden"  value="<?php echo $_POST['index'];?>" id="index" name="index">
    	<input type="hidden" name="aid" id="aid" value="<?php echo $row[14];?>">
        	<div class="form-group">
           <div class="col-sm-6">
             <input id="fname1" class="form-control input-group-lg reg_name" type="text" name="fname" title="Enter first name" value="<?php echo $row[1];?>" placeholder="First name" required />
           </div>       
           <div class="col-sm-6">
             <input id="lname1" class="form-control input-group-lg reg_name" type="text" name="lname" title="Enter last name" value="<?php echo $row[2];?>" placeholder="Last name" required/>
           </div>
    	</div>
    	<div class="form-group">
           <div class="col-sm-6">
             <input id="cnic1" class="form-control input-group-lg reg_name" type="text" name="cnic" title="Enter cnic" placeholder="CNIC " value="<?php echo $row[8];?>" required>
           </div>       
           <div class="col-sm-6">
             <input id="cellno1" class="form-control input-group-lg reg_name" type="text" name="cellno" title="Cell no" value="<?php echo $row[12];?>"  placeholder="Cell number" required>
           </div>
    	</div>
    	
      <div class="form-group">
           <div class="col-sm-6">
             <input id="username1" class="form-control input-group-lg reg_name" type="text" name="username" title="Enter user name" value="<?php echo $row[4];?>"  placeholder="Username" required>
           </div>       
           <div class="col-sm-6">
             <input id="password1" class="form-control input-group-lg reg_name" type="password" name="password" title="Enter password" value="<?php echo $row[5];?>"  placeholder="Enter password" required>
           </div>
    	</div>
    <div class="form-group">

       <div class="col-sm-6">
            <select id="gender1" name="gender"   class="form-control" required>
            <option value="Male"<?php if ($row[7] == 'Male') echo ' selected="selected"'; ?> >Male</option>
            <option value="Female"<?php if ($row[7] == 'Female') echo ' selected="selected"'; ?>>Female</option>
          </select>
        </div>
         <div class="col-sm-6">
              <input class="form-control" id="dob1" name="dob1" placeholder="MM/DD/YYY" type="text" value="<?php echo $row[6];?>"  required/>
        </div>
  </div>
    	<div class="form-group">
           <div class="col-sm-6">
             <input id="fathername1" class="form-control input-group-lg reg_name" type="text" name="fathername" value="<?php echo $row[3];?>"  title="Enter Father name" placeholder="Father name" required>
           </div>       
           <div class="col-sm-6">
             <input id="fatheroccupation1" class="form-control input-group-lg reg_name" type="text" name="fatheroccupation" value="<?php echo $row[11];?>"  title="Enter Father's occupation" placeholder="Father's occupation" required>
           </div>
    	</div>
    	<div class="form-group">
           <div class="col-sm-6">
             <input id="fathercnic1" class="form-control input-group-lg reg_name" type="text" name="fathercnic" value="<?php echo $row[9];?>"  title="Enter Father's cnic" placeholder="Father's CNIC" required>
           </div>       
           <div class="col-sm-6">
             <input id="fathercellno1" class="form-control input-group-lg reg_name" type="text" name="fathercellno" value="<?php echo $row[12];?>"  title="Enter Father's cell no" placeholder="Father's cell no" required>
           </div>
    	</div>
    	</fieldset>
    	<fieldset>
    	<legend>Address</legend>

    	<?php
    		$aid=$row[13];
    		$query="select * from address where aid='$aid';";
    		$res=mysqli_query($con,$query);
    		if($row1=mysqli_fetch_row($res)){
    			$hno=$row1[1];
    			$sno=$row1[2];
    			$city=$row1[3];
    			$country =$row1[4];
    		}
    	?>

    	<div class="form-group">
           <div class="col-sm-3">
             <input id="houseno1" class="form-control input-group-lg reg_name" type="number" name="houseno" title="Enter House number" value="<?php echo $hno;?>" placeholder="Enter House number" required>
           </div>       
           <div class="col-sm-3">
             <input id="streetno1" class="form-control input-group-lg reg_name" type="text" name="streetno" title="Enter Street No" value="<?php echo $sno;?>" placeholder="Enter Street No" required>
           </div>
           <div class="col-sm-3">
             <input id="city1" class="form-control input-group-lg reg_name" value="<?php echo $city;?>" type="text" name="city" title="Enter City" placeholder="Enter City" required>
           </div>       
            <div class="col-sm-3">
             <input id="country1" class="form-control input-group-lg reg_name" type="text" name="country" title="Enter Country" placeholder="Enter Country" required value="<?php echo $country;?>">
           </div>
    	</div>
    	</fieldset>
    	<input type="submit" id="update"  name="update" value="Update Data" class="btn btn-success" style="float: right;">
    	<br>
        </form>	
        <div id="responsecontainer">
        	hi
        </div>		  
        <?php
		}
	}
	else{

	}
}
else{
	?>
	<script>
		alert("no data found regarding your entered data");
	</script>
	<?php
}
?>
</body>
<script >    

$(document).ready(function() {
$("#update").click(function(e) {
e.preventDefault();
var fname = $("input#fname1").val();
var lname = $("input#lname1").val();
var cnic = $("input#cnic1").val();
var cellno = $("input#cellno1").val();
var username = $("input#username1").val();
var password = $("input#password1").val();
var fathername = $("input#fathername1").val();
var fatheroccupation = $("input#fatheroccupation1").val();
var fathercnic = $("input#fathercnic1").val();
var fathercellno = $("input#fathercellno1").val();
var e = document.getElementById("gender1");
var gender = e.options[e.selectedIndex].value;
//var gender = $("input#gender").val(); 
var dob = $("input#dob1").val();
var hno=$("input#houseno1").val();
var sno=$("input#streetno1").val();
var city=$("input#city1").val();
var country=$("input#country1").val();
var index=$("input#index").val();
var aid=$("input#aid").val();
//alert(hno+sno+city+country);

$.ajax({
type: "POST",
url: 'update.php',
dataType: "html",

//way to pass data
//'code=' + code + '&userid=' + userid
data: 'fname=' + fname + '&lname='+lname + '&cnic='+cnic + '&cellno='+cellno + '&username='+username + '&password='+password + '&fathername='+fathername + '&fatheroccupation='+fatheroccupation + '&fathercnic='+fathercnic + '&fathercellno='+fathercellno + '&gender='+gender + '&dob='+dob + '&hno=' + hno + '&sno=' + sno + '&city=' + city + '&country=' + country+ '&index=' + index + '&aid='+ aid, 

success: function(response) {

$("#responsecontainer").html(response);
$("#cancelupdatestudent").click();
alert("data is updated");
//$("#canceladdstudent").click();
}
});
});
});
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="dob1"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
</html>