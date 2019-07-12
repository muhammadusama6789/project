<?php
session_start();
if(isset($_SESSION["username"])){
  /*?>
  <script>alert("already set");</script>
  <?php*/
}
else{
    /*?>
  <script>alert("not already set");</script>
  <?php*/
  header('Location: index.html');
  exit();
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Teacher Pannel</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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


<!--script for pdf start-->
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="//cdn.bootcss.com/jspdf/1.3.3/jspdf.debug.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="//cdn.bootcss.com/Base64/1.0.1/base64.js"></script>
    <script src="//cdn.jsdelivr.net/canvas2image/0.1/canvas2image.js"></script>
      <!--script for pdf end  -->


  <style >
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
     background-image: url("images/teacher-back.jpg");
     background-repeat: no-repeat;
     background-size: cover; 
  }
  </style>

</head>
<body >

<div class="container">

<div class="jumbotron text-center">

  <h1>Teacher Pannel</h1>
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
      <li ><a id="attendance"  >Attendance</a></li>
      <li ><a href="Quiz_Entry_Admin.php"  >Quiz</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <?php
          if(isset($_SESSION["username"])){
            echo $_SESSION["username"];
          }
          else{
            ?>
            <script>
            alert("Session error");
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
     </ul>
    </div>
  </div>
</nav>
<div id="attendance-div" hidden>
  <?php
  $name=$_SESSION["username"];
  require "connection.php";
  $query="SELECT * FROM student WHERE SSectionId=(SELECT secId from teachervsall WHERE teacherId=(SELECT Tid from teacher WHERE Tusername='$name'));";
  $result=mysqli_query($con,$query);
  $i=0;
  ?>
  <div class="container" style="background-color: white;padding: 10px;">
  <form >
     <table id="widget" class="table" style="padding: 15px;background-color: white; width: 100%;">
    <thead style="background-color: #1a5276;color: white;">
      <tr>
        <th>ID</th>
        <th>Enrollment #</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Status</th>
        <th>Leaves</th>
     </tr>
    </thead>
    <?php
   // echo $query;
  while( $row=mysqli_fetch_row($result)){
    $i++;
    $j=$row[10];
    ?>
    <tbody>
     <tr>
      <td><?php echo $i;?></td>
      <td><?php echo $row[0];?></td>
      <td><?php echo strtoupper($row[1]);?></td>
      <td><?php echo strtoupper($row[2]);?></td>

      <!--<td><input checked type="checkbox" name="status[$i]" value="Present"></td>-->
      <?php
       echo "<td>"."<input data-toggle='toggle' data-width='100' data-on='Present' data-off='Absent' data-onstyle='success' type='checkbox' name='options[$i]' checked>"."<br>"."</td>";
      ?>
      <td><?php
      $atQuery="SELECT SAttendance FROM student where Sid='$row[0]';";
      //echo $atQuery;
      $result2=mysqli_query($con,$atQuery);
      $row2=mysqli_fetch_row($result2);
      echo $row2[0];     
      ?></td>
     </tr>
    </tbody>

  <?php

 }
 
  ?>
    </table>

    <input type="text" name="size" id="size" value="<?php echo $i;?>" hidden>
    <input type="text" name="class" id="class" value="<?php echo $j;?>" hidden>
    <input type="submit" name="submit-attendance" id="submit-attendance" value="SAVE" class="btn btn-success">

    </form>
       <input type="button" id="btnSave" class="btn btn-warning" value="PDF"  align="center">
  </div>  
</div>
</body>
<script type="text/javascript">
  $(document).ready(function() {
  $("#attendance").click(function(e) {
    $("#attendance-div").show();

  });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
  $("#submit-attendance").click(function(e) {
    e.preventDefault();
    var Class=$("input#class").val();
    var size=$("input#size").val();
  //  alert(size);
   // alert(Class);
    $.ajax({
    type: "POST",
    url: 'attendance.php',
    dataType: "html",
    data: 'Class=' + Class+'&size='+size,
    success: function(response) {
      window.location.reload();
     //alert(response);
    }
    });

  });
  });
</script>
<script>
$(function() {
    var height = $('#widget').outerHeight();
    var width = $('#widget').outerWidth();
    var ratio = height / width;
    console.log(ratio);
 
    // 600 x 222  120 x 80
    // max with 120 so 120/600 222*1
    var pdfWidth = 200; //portrait full width
    var pdfHeight = pdfWidth * ratio;
  function createPDF(imgData) {
    var doc = new jsPDF();
    doc.addImage(imgData, 'JPEG', 10, 10, pdfWidth, pdfHeight, 'monkey');
    doc.output('datauri');
  }
 
  $("#btnSave").click(function() {
    html2canvas($("#widget"), {
     onrendered: function(canvas) {
        theCanvas = canvas;
        createPDF(theCanvas)
      }
   });
  });
 
});
</script>
</html>