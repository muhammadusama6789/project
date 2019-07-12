<?php
session_start();
if(isset($_SESSION["username"])){
  /*?>
  <script>//alert("already set");</script>
  <?php*/
}
else{
    /*?>
  <script>//alert("not already set");</script>
  <?php*/
  header('Location: index.html');
  exit();
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Pannel</title>

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
  #fee-record tr:hover{
    background-color: #1a5276;
    color: white;
  }
   #fee-record thead{
    background-color: #1a5276;
    color: white;
  }
  #salary-record tr:hover{
    background-color: #1a5276;
    color: white;
  }
   #salary-record thead{
    background-color: #1a5276;
    color: white;
  }
   .navbar {
      margin-bottom: 0;
      background-color: #1a5276;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #1a5276 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }

.dropdown li a{
	background-color: #1a5276;
	color: white;
  cursor:pointer;
}
.dropdown li{

	background-color: black;
	color: white;
}
.dropdown li:hover{
  cursor:pointer;
	color: white;
	background-color: #1a5276;
}
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


	.dropdown-menu{
		background-color: white;
		color:#1a5276;
	}
 body{
     background-image: url("images/admin-back.jpeg");
     background-repeat: no-repeat;
     background-size: cover; 
  }
  </style>

</head>
<body >

<div class="container">

<div class="jumbotron text-center">

  <h1>Admin Pannel</h1>
</div>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><b style="font-size: 20px;position: relative;">The City School</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Student Pannel
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="addStudentModal" data-toggle="modal" data-target="#addStudent">Add</a></li>
             <!--type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"-->
            <li><a id="updateStudentModal" data-toggle="modal" data-target="#updateStudent">Update</a></li>
            <li><a id="deleteStudentModal" data-toggle="modal" data-target="#deleteStudent">Delete</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Teacher Pannel
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a id="addTeacherModal" data-toggle="modal" data-target="#addTeacher">Add</a></li>
            <li><a id="updateTeacherModal" data-toggle="modal" data-target="#addSection">Add More Section</a></li>
            <li><a id="deleteTeacherModal" data-toggle="modal" data-target="#deleteTeacher">Delete</a></li>
          </ul>
        </li>
        <li><a id="fr" >Fee Records</a></li>
           <li><a id="sr" >Salary Records</a></li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <?php
          if(isset($_SESSION["username"])){
            echo $_SESSION["username"];
          }
          else{
            ?>
            <script>
            //alert("Session error");
            </script>
          
            <?php

            header('Location: logout.html');
            exit();
          }
          ?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
       <!-- <?php
        //echo $_SESSION["username"];
        ?>-->
    <!--     <li><a href="index.html">LOGOUT</a></li>
     --> </ul>
    </div>
  </div>
</nav>

<!--Student Pannel Starts-->
<!-- Modal Student-->
  <div class="modal fade" id="addStudent" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" id="canceladdstudent" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Student Pannel</h4>
        </div>
        <div class="modal-body">
        <form class="form-horizontal">
        	<fieldset>
    	<legend>Personal Information</legend>
        	<div class="form-group">
           <div class="col-sm-6">
             <input id="fname" class="form-control input-group-lg reg_name" type="text" name="fname" title="Enter first name" placeholder="First name" required>
           </div>       
           <div class="col-sm-6">
             <input id="lname" class="form-control input-group-lg reg_name" type="text" name="lname" title="Enter last name" placeholder="Last name" required>
           </div>
    	</div>
    	<div class="form-group">
           <div class="col-sm-6">
             <input id="cnic" class="form-control input-group-lg reg_name" type="text" name="cnic" title="Enter cnic" placeholder="CNIC " required>
           </div>       
           <div class="col-sm-6">
             <input id="cellno" class="form-control input-group-lg reg_name" type="text" name="cellno" title="Cell no" placeholder="Cell number" required>
           </div>
    	</div>
    	
      <div class="form-group">
           <div class="col-sm-6">
             <input id="username" class="form-control input-group-lg reg_name" type="text" name="username" title="Enter user name" placeholder="Username" required>
           </div>       
           <div class="col-sm-6">
             <input id="password" class="form-control input-group-lg reg_name" type="password" name="password" title="Enter password" placeholder="Enter password" required>
           </div>
    	</div>
    <div class="form-group">

       <div class="col-sm-3">
            <select id="gender" name="gender" class="form-control" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="col-sm-3">
            <select id="std-class" name="std-class" class="form-control" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
         <div class="col-sm-6">
              <input class="form-control" id="dob" name="dob" placeholder="MM/DD/YYY" type="text" required/>
            
        </div>
  </div>
    	<div class="form-group">
<div class="col-sm-6">
             <input id="fathername" class="form-control input-group-lg reg_name" type="text" name="fathername" title="Enter Father name" placeholder="Father name" required>
           </div>       
           <div class="col-sm-6">
             <input id="fatheroccupation" class="form-control input-group-lg reg_name" type="text" name="fatheroccupation" title="Enter Father's occupation" placeholder="Father's occupation" required>
           </div>
    	</div>
    	<div class="form-group">
           <div class="col-sm-6">
             <input id="fathercnic" class="form-control input-group-lg reg_name" type="text" name="fathercnic" title="Enter Father's cnic" placeholder="Father's CNIC" required>
           </div>       
           <div class="col-sm-6">
             <input id="fathercellno" class="form-control input-group-lg reg_name" type="text" name="fathercellno" title="Enter Father's cell no" placeholder="Father's cell no" required>
           </div>
    	</div>
    	</fieldset>
    	<fieldset>
    	<legend>Address</legend>
    	<div class="form-group">
           <div class="col-sm-3">
             <input id="houseno" class="form-control input-group-lg reg_name" type="number" name="houseno" title="Enter House number" placeholder="Enter House number" required>
           </div>       
           <div class="col-sm-3">
             <input id="streetno" class="form-control input-group-lg reg_name" type="text" name="streetno" title="Enter Street No" placeholder="Enter Street No" required>
           </div>
           <div class="col-sm-3">
             <input id="city" class="form-control input-group-lg reg_name" type="text" name="city" title="Enter City" placeholder="Enter City" required>
           </div>       
            <div class="col-sm-3">
             <input id="country" class="form-control input-group-lg reg_name" type="text" name="country" title="Enter Country" placeholder="Enter Country" required>
           </div>
    	</div>
    	</fieldset>
    	<input type="submit" id="save" name="save" name="submit" value="Register" class="btn btn-success" style="float: right;"><br>
        </form>
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
      
    </div>
  </div>

<!-- Modal--> 
<div class="modal fade" id="updateStudent" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" id="cancelupdatestudent" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Student Update Panel</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" >
          <div id="search-field" name="search-field" class="form-group" style="margin: 10px;">
            <input type="text" name="search" class="form-control" id="search" placeholder="Enter CNIC of student to update">
            <br>
            <input class="btn btn-success" type="submit" id="btn-search" name="btn-search" value="SEARCH" style="float: right;">
          </div>
          <div id="responsecontainer">
            
          </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
  <div class="modal fade" id="deleteStudent" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" id="canceldeletestudent" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Student Record</h4>
        </div>
      <div class="modal-body">
        <form class="form-horizontal" >
            <input type="text" name="deletesearch" class="form-control" id="deletesearch" placeholder="Enter CNIC of student to delete">
            <br>
            <input class="btn btn-success" type="submit" id="delete" name="delete" value="DELETE" style="float: right;">
          
          <div id="deleteresponsecontainer">
            hi
          </div>
        </form>
     </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>

</div>
<!--Student Pannel End-->


<!-- Modal Teacher-->
  <div class="modal fade" id="addTeacher" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" id="canceladdteacher" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Teacher Pannel</h4>
        </div>
        <div class="modal-body">
        <form class="form-horizontal">
          <fieldset>
      <legend>Personal Information</legend>
          <div class="form-group">
           <div class="col-sm-6">
             <input id="tfname" class="form-control input-group-lg reg_name" type="text" name="tfname" title="Enter first name" placeholder="First name" required>
           </div>       
           <div class="col-sm-6">
             <input id="tlname" class="form-control input-group-lg reg_name" type="text" name="tlname" title="Enter last name" placeholder="Last name" required>
           </div>
      </div>
      <div class="form-group">
           <div class="col-sm-6">
             <input id="tcnic" class="form-control input-group-lg reg_name" type="text" name="tcnic" title="Enter cnic" placeholder="CNIC " required>
           </div>       
           <div class="col-sm-6">
             <input id="tcellno" class="form-control input-group-lg reg_name" type="text" name="tcellno" title="Cell no" placeholder="Cell number" required>
           </div>
      </div>
      
      <div class="form-group">
           <div class="col-sm-6">
             <input id="tusername" class="form-control input-group-lg reg_name" type="text" name="tusername" title="Enter user name" placeholder="Username" required>
           </div>       
           <div class="col-sm-6">
             <input id="tpassword" class="form-control input-group-lg reg_name" type="password" name="tpassword" title="Enter password" placeholder="Enter password" required>
           </div>
      </div>
    <div class="form-group">
     <div class="col-sm-3">
              <input class="form-control" id="tdob" name="tdob" placeholder="MM/DD/YYY" type="text" required/>
      </div>

     <div class="col-sm-3">
            <select id="teacherOf" name="teacherOf" class="form-control" required>
            <option value="Mathematics">Mathematics</option>
            <option value="Urdu">Urdu</option>
            <option value="English">English</option>
            <option value="Islamiyat">Islamiyat</option>
            <option value="Science">Science</option>
          </select>
        </div>
        <div class="col-sm-3">
            <select id="courseFor" name="courseFor" class="form-control" onchange="change()" required>
            <option value="Select" disabled selected placeholder="Select">Select</option>
             <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div class="col-sm-3" id="area">
          
        </div>
        
  </div>
      <div class="form-group">
     
       <div class="col-sm-3">
            <select id="tgender" name="gender" class="form-control" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
      <div class="col-sm-3">
             <input id="tfathername" class="form-control input-group-lg reg_name" type="text" name="tfathername" title="Enter Father name" placeholder="Father name" required>
           </div>       
           <div class="col-sm-6">
             <input id="tfathercnic" class="form-control input-group-lg reg_name" type="text" name="tfathercnic" title="Enter Father's cnic" placeholder="Father's CNIC" required>
           </div>
      </div>
      <div class="form-group">
           <div class="col-sm-6">
             <input id="tsalary" class="form-control input-group-lg reg_name" type="number" name="tsalary" title="Teacher's salary" placeholder="Teacher's salary " required>
           </div>       
           <div class="col-sm-6">
            <select id="tposition" name="tposition" class="form-control" required>
             <option value="Class Incharge">Class Incharge</option>
            <option value="Teacher">Teacher</option>
          </select>
           </div>
      </div>
      </fieldset>
      <fieldset>
      <legend>Address</legend>
      <div class="form-group">
           <div class="col-sm-3">
             <input id="thouseno" class="form-control input-group-lg reg_name" type="number" name="thouseno" title="Enter House number" placeholder="Enter House number" required>
           </div>       
           <div class="col-sm-3">
             <input id="tstreetno" class="form-control input-group-lg reg_name" type="text" name="tstreetno" title="Enter Street No" placeholder="Enter Street No" required>
           </div>
           <div class="col-sm-3">
             <input id="tcity" class="form-control input-group-lg reg_name" type="text" name="tcity" title="Enter City" placeholder="Enter City" required>
           </div>       
            <div class="col-sm-3">
             <input id="tcountry" class="form-control input-group-lg reg_name" type="text" name="tcountry" title="Enter Country" placeholder="Enter Country" required>
           </div>
      </div>
      </fieldset>
      <input type="submit" id="tsave" name="tsave" name="submit" value="Register" class="btn btn-success" style="float: right;"><br>
        </form>
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
      
    </div>
  </div>

 <div class="modal fade" id="addSection" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" id="canceldeletestudent" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ADD SECTION</h4>
        </div>
      <div class="modal-body">
        <form class="form-horizontal" >
        <div id="section-form">
            <input type="text" name="text-addSection" class="form-control" id="text-addSection" placeholder="NAME OF TEACHER">
            <br>
            <input class="btn btn-success" type="submit" id="addSection" name="addSection" value="ADD" style="float: right;">
            </div>
          <div id="section-response">
            Response will display here..!!
          </div>
        </form>
     </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>

</div>
<div id="fee-record" class="container" style="background-color: white;" hidden>
  <table class="table">
     <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Class</th>
        <th>Fee Status</th>
        <th>Fee Option</th>
     </tr>
    </thead>
    <?php
    $i=0;
    require "connection.php";
      $fee="SELECT * from student;";
      $fee_res=mysqli_query($con,$fee);
      while($fee_row=mysqli_fetch_row($fee_res)){
         $i++;
        $fname=strtoupper($fee_row[1]);
        $class=$fee_row[10];
        $status=strtoupper($fee_row[16]);
      ?>
      <tbody>
      <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $fname;?></td>
        <td><?php echo "Class ".$class;?></td>
        
        <?php
        if($status!='CLEAR'){
          ?>
          <td style="color:red;font-style: bold;"><?php echo $status;?></td>
        <td><input type="button" name="cash" class="btn btn-success" value="Pay"></td>
        <?php
        }else{
          ?>
          <td><?php echo $status;?></td>
          <td></td>
          <?php
        }
        ?>
      </tr>
      </tbody>
     
      <?php
      }
    ?>
  </table>
</div>
<div id="salary-record" class="container" style="background-color: white;" hidden>
   <table class="table">
     <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Department</th>
        <th>Postition</th>
        <th>Salary</th>
     </tr>
    </thead>
    <?php
    $i=0;
      $fee="SELECT * from teacher;";
      $fee_res=mysqli_query($con,$fee);
      while($fee_row=mysqli_fetch_row($fee_res)){
         $i++;
        $fname=strtoupper($fee_row[1]);
        $dept=strtoupper($fee_row[3]);
        $salary=strtoupper($fee_row[9]);
        $postition=strtoupper($fee_row[12]);
      ?>
      <tbody>
      <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $fname;?></td>
        <td><?php echo $dept;?></td>
        <td><?php echo $postition;?></td>
        <td><?php echo "RS: ".$salary;?></td>
      </tr>
      </tbody>
     
      <?php
      }
    ?>
  </table>
</div>
</body>
<script type="text/javascript">
  $(document).ready(function() {
  $("#fr").click(function(e) {
   // alert("hi");
    $("#fee-record").show();
    $("#salary-record").hide();
  });
});
   $(document).ready(function() {
  $("#sr").click(function(e) {
   // alert("hi");
    $("#salary-record").show();
    $("#fee-record").hide();
  });
});
</script>
<script >    

$(document).ready(function() {
  $("#addSection").click(function(e) {
  e.preventDefault();
  var index = $("input#text-addSection").val();
//  //alert(index);
if(index){
    $.ajax({
    type: "POST",
    url: 'addSections.php',
    dataType: "html",
    data: 'index=' + index,
    success: function(response) {
      $("#section-form").hide();
    $("#section-response").html(response);
    }
    });
}
  });


});
</script>
<script>
 function change(){
//  //alert("hi");
  var c = document.getElementById("courseFor");
  var Class = c.options[c.selectedIndex].value;
////alert(Class);
$.ajax({
type: "POST",
url: 'fetchsection.php',
dataType: "html",
data: 'Class=' + Class,
success: function(response) {
  
$("#area").html(response);
 }
});
}
</script>
<script >    

$(document).ready(function() {
$("#delete").click(function(e) {
e.preventDefault();
var index = $("input#deletesearch").val();
$.ajax({
type: "POST",
url: 'deleteStudent.php',
dataType: "html",
data: 'index=' + index,
success: function(response) {

$("#deleteresponsecontainer").html(response);
$("#canceldeletestudent").click();
}
});
});
});
</script>

<script >
  
$(document).ready(function() {
$("#tsave").click(function(e) {
  ////alert("come in ");
e.preventDefault();
var tfname = $("input#tfname").val();
////alert(tfname);
var tlname = $("input#tlname").val();
////alert(tlname);
var tcnic = $("input#tcnic").val();
////alert(tcnic);
var tcellno = $("input#tcellno").val();
////alert(tcellno);
var tusername = $("input#tusername").val();
////alert(tusername);
var tpassword = $("input#tpassword").val();
////alert(tpassword);
var tfathername = $("input#tfathername").val();
////alert(tfathername);
var tfathercnic = $("input#tfathercnic").val();
////alert(tfathercnic);
var e = document.getElementById("gender");
var tgender = e.options[e.selectedIndex].value;
////alert(tgender);
var tdob = $("input#tdob").val();
////alert(tdob);
var thno=$("input#thouseno").val();
////alert(thno);
var tsno=$("input#tstreetno").val();
////alert(tsno);
var tcity=$("input#tcity").val();
////alert(tcity);
var tcountry=$("input#tcountry").val();
////alert(tcountry);
var c = document.getElementById("courseFor");
var Class = c.options[c.selectedIndex].value;
////alert(Class);
var s = document.getElementById("teacherOf");
var subject = s.options[s.selectedIndex].value;
////alert(subject);
var p = document.getElementById("tposition");
var position = p.options[p.selectedIndex].value;
////alert(position);
var salary=document.getElementById("tsalary").value;


var s = document.getElementById("section");
var section = s.options[s.selectedIndex].value;

//alert("Everything is fine here...!!!");

////alert(tfname);
$.ajax({
type: "POST",
url: 'addTeacher.php',
dataType: "html",
data: 'tfname=' + tfname + '&tlname='+tlname + '&tcnic='+tcnic + '&tcellno='+tcellno + '&tusername='+tusername + '&tpassword='+tpassword + '&tfathername='+tfathername +  '&tfathercnic='+tfathercnic + '&tgender='+tgender + '&tdob='+tdob + '&thno=' + thno + '&tsno=' + tsno + '&tcity=' + tcity + '&tcountry=' + tcountry + '&Class=' + Class + '&subject='+ subject + '&position='+ position+ '&salary='+ salary+ '&section='+section, 
success: function(response) {
  ////alert("fine now ");
}
});
});
});

</script>

<script >    

$(document).ready(function() {
$("#btn-search").click(function(e) {
e.preventDefault();
var index = $("input#search").val();
$.ajax({
type: "POST",
url: 'updatefetchdata.php',
dataType: "html",
data: 'index=' + index,
success: function(response) {

$("#responsecontainer").html(response);
$("#search-field").hide();
}
});
});
});
</script>

<script >    

$(document).ready(function() {
$("#save").click(function(e) {
e.preventDefault();
var fname = $("input#fname").val();
var lname = $("input#lname").val();
var cnic = $("input#cnic").val();
var cellno = $("input#cellno").val();
var username = $("input#username").val();
var password = $("input#password").val();
var fathername = $("input#fathername").val();
var fatheroccupation = $("input#fatheroccupation").val();
var fathercnic = $("input#fathercnic").val();
var fathercellno = $("input#fathercellno").val();
var e = document.getElementById("gender");
var gender = e.options[e.selectedIndex].value;
//var gender = $("input#gender").val(); 
var dob = $("input#dob").val();
var hno=$("input#houseno").val();
var sno=$("input#streetno").val();
var city=$("input#city").val();
var country=$("input#country").val();


var c = document.getElementById("std-class");
var Class = c.options[c.selectedIndex].value;
////alert("=>> "+Class);
////alert(hno+sno+city+country);
$.ajax({
type: "POST",
url: 'insertInTable.php',
dataType: "html",

//way to pass data
//'code=' + code + '&userid=' + userid
data: 'fname=' + fname + '&lname='+lname + '&cnic='+cnic + '&cellno='+cellno + '&username='+username + '&password='+password + '&fathername='+fathername + '&fatheroccupation='+fatheroccupation + '&fathercnic='+fathercnic + '&fathercellno='+fathercellno + '&gender='+gender + '&dob='+dob + '&hno=' + hno + '&sno=' + sno + '&city=' + city + '&country=' + country + '&Class=' + Class, 
success: function(response) {

$("#responsecontainer").html(response);
//$("#addStudent").hide$("#canceladdstudent").click();
}
});
});
});
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="dob"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="tdob"]'); //our date input has the name "date"
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