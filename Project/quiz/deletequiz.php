<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("sms", $connection); // Selecting Database from Server
 $quiz=$_POST["quizname"];


 mysql_query("DROP TABLE IF EXISTS ".$quiz."");


header('Location:Quiz_Entry_Admin.php');
 ?>