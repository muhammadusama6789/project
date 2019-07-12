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
	<title>Student Pannel</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style >
  	.navbar {
      margin-bottom: 0;
      background-color: #1a5276;
      z-index: 9999;
      border: 0;
      font-size: 14px !important;
      line-height: 1.42857143 !important;
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

.dropdown li:hover{
	background-color: white;
	color: #1a5276;
	border: none;
}
.dropdown li{
	color: white;
	border:none;
	background-color: #1a5276;
}
body{
  background-image: url("images/student-back.jpg");
     background-repeat: no-repeat;
     background-size: cover; 

  }
  .table tr:hover{
    background-color: #1a5276;
    color: white;
  }
  .table thead{
    background-color: #1a5276;
    color: white;
    padding: 10px;
  }
  </style>

</head>
<body>
<div class="container" >
<div class="jumbotron text-center">
	<h1>Student Pannel</h1>
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
        <li><a id="qm" href="#quiz-marks">Quiz Marks</a></li>
        <li><a id="em" href="#exam-marks">Exam Marks</a></li>
        <li><a id="at" href="#attendance">Attendance</a></li>
         <li><a href="start.html">Attempt Quiz</a></li>
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
<div id="quiz-marks" class="container" style="background-color: white;padding-top: 10px;" hidden>
<b>Name: <?php echo $_SESSION["username"];?></b>
<b>Class 5</b>
  <table class="table" style="padding: 15px;">
    <thead>
      <tr>
        <th>#</th>
        <th>Quiz 1</th>
        <th>Quiz 2</th>
        <th>Quiz 3</th>
        <th>Quiz 4</th>
        <th>Quiz 5</th>
        <th>Quiz 6</th>
        <th>Quiz 7</th>
        <th>Quiz 8</th>
     </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>10</td>
        <td>8</td>
        <td>10</td>
        <td>9</td>
        <td>10</td>
        <td>8</td>
        <td>10</td>
        <td>9</td>
      </tr>
      <tr>
        <td>2</td>
        <td>10</td>
        <td>8</td>
        <td>10</td>
        <td>9</td>
        <td>10</td>
        <td>8</td>
        <td>10</td>
        <td>9</td>
      </tr>
      <tr>
        <td>3</td>
        <td>10</td>
        <td>8</td>
        <td>10</td>
        <td>9</td>
        <td>10</td>
        <td>8</td>
        <td>10</td>
        <td>9</td>
      </tr>
      <tr>
        <td>4</td>
       <td>10</td>
        <td>8</td>
        <td>10</td>
        <td>9</td>
        <td>10</td>
        <td>8</td>
        <td>10</td>
        <td>9</td>
      </tr>
      <tr>
        <td>5</td>
        <td>10</td>
        <td>8</td>
        <td>10</td>
        <td>9</td>
        <td>10</td>
        <td>8</td>
        <td>10</td>
        <td>9</td>
      </tr>
    </tbody>
  </table>
</div>
<div id="exam-marks" class="container" style="background-color: white;padding-top: 10px;" hidden>
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>First Term</th>
        <th>Second Term</th>
        <th>Third Term</th>
        <th>Fourth Term</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td>1</td>
        <td>90</td>
        <td>98</td>
        <td>10</td>
        <td>90</td>
      </tr>

    </tbody>
  </table>
</div>
<div id="attendance" class="container" style="background-color: white;border: 10px;" hidden>
  <table class="table" style="padding: 40px;">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
</div>
</body>


<script type="text/javascript">
$(document).ready(function() {
  $("#qm").click(function(e) {
    $("#quiz-marks").show();
    $("#exam-marks").hide();
    $("#attendance").hide();
  });
  $("#em").click(function(e) {
    $("#quiz-marks").hide();
    $("#exam-marks").show();
    $("#attendance").hide();
  });
  $("#at").click(function(e) {
    $("#quiz-marks").hide();
    $("#exam-marks").hide();
    $("#attendance").show();
  });
});
</script>
</html>