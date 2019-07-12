<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("sms", $connection); // Selecting Database from Server
 $question=$_POST["question"];
 $opt1=$_POST["opt1"];
 $opt2=$_POST["opt2"];
 $opt3=$_POST["opt3"];
 $opt4=$_POST["opt4"];
 $quizname=$_POST["quizname"];
 $woptcode=$_POST["woptcode"];
 $query="select * from ".$quizname."";
 $temp=1;
 

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
    $temp= $temp+1;
}
 echo "successfully Saved";
 mysql_query("CREATE TABLE IF NOT EXISTS `".$quizname."` (

  `qid` int(11) NOT NULL auto_increment,   
  `Question` text,       
  `opt1` text,     
  `opt2` text,  
  `opt3` text,  
  `opt4` text,  
  `woptcode` varchar(5) NOT NULL default '', 
   PRIMARY KEY  (`qid`)

);");
 mysql_query("insert into ".$quizname." values ($temp,'$question','$opt1','$opt2','$opt3','$opt4','$woptcode')");


header('Location:Quiz_Entry_Admin.php');
 ?>