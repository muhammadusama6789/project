<!DOCTYPE html>
<html>
<head>
	<title>Employee Pannel</title>
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
  </style>

</head>
<body>
<div class="container">
<div class="jumbotron text-center">
	<h1>Employee Pannel</h1>
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
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Employee Pannel
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Add</a></li>
            <li><a href="#">Update</a></li>
            
            <li><a href="#">Delete</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Teacher Pannel
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="#">Add</a></li>
            <li><a href="#">Update</a></li>
            <li><a href="#">Delete</a></li>
          </ul>
        </li>
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Employee Pannel
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="#">Add</a></li>
            <li><a href="#">Update</a></li>
            <li><a href="#">Delete</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Accountant Pannel
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="#">Add</a></li>
            <li><a href="#">Update</a></li>
            <li><a href="#">Delete</a></li>
          </ul>
        </li>
         <li><a href="index.html">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>