<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div id="page-wrap">

		
		<form action="Quiz.php" method="post" id="quiz">
		
            <ol>
<?php

	if(isset($_POST['next']) )
	{
		if (!isset($_POST['radio']))
		{
			$a=$_POST['a']-1;
			$q=$_POST['q'];
			$b=$_POST['b'];
			$t=$_POST['t'];
			goto p;
		}
		if(!isset($b)){
			
			$b=0;
			$t=0;
			$q=0;
			
	
		}
		$a=$_POST['a'];
		$q=$_POST['q']+1;
	}
	if(!isset($a)){
		
		$a=1;
		

	$t=0;
	require "connection.php";
	$sql = "Drop TABLE xyz";
	mysqli_query($con, $sql);

	$sql = "CREATE TABLE xyz(id INT,mark varchar(4))";
	mysqli_query($con, $sql);

		$b=0;
		$q=1;
	}
	
	p:
	require "connection.php";
	
	$sql2="SELECT COUNT(*) FROM quiz";
	$result2 = mysqli_query($con,$sql2);
	if($result2)
	{
		
							$row2= mysqli_fetch_array($result2);
		
			
	
			
	
		
		$sql1="SELECT * FROM quiz WHERE qid='$a'";
		$result = mysqli_query($con,$sql1);
		echo "<form method='post' action='Quiz.php'>";
		if($result)
		{
				while ($row = mysqli_fetch_array($result))
				{
					echo "<fieldset style='padding: 3em 2em;' >";
					echo "<legend style='padding: 1em 0.5em;color:green;font-size:200%;text-align:center;'>Quiz Questions</legend>";
						echo "<h3>".$q.".  ".$row['Question']."<h3>";echo '<br>';
						echo '<div><input type="radio" name="radio" value="a">'.'<label for="Question"> a) '.$row['opt1'].'</label></div>';
						echo '<br>';
						echo '<div><input type="radio" name="radio" value="b">'.'<label for="Question"> b) '.$row['opt2'].'</label></div>';
						echo '<br>';
						echo '<div><input type="radio" name="radio" value="c">'.'<label for="Question"> c) '.$row['opt3'].'</label></div>';
						echo '<br>';
						echo '<div><input type="radio" name="radio" value="d">'.'<label for="Question"> d) '.$row['opt4'].'</label></div>';
						echo '<br>';
					

					if(isset($_POST['radio']))
					{
						
					
							$u= $_POST['a'] - 1;
							$sql1="SELECT * FROM quiz WHERE qid='$u'";
							$result = mysqli_query($con,$sql1);
							$row1 = mysqli_fetch_array($result);
							if($_POST['radio'] == $row1['woptcode'])
							{
								$sql = "INSERT INTO xyz (id,mark)VALUES (1,'".$_POST['radio']."')";
								mysqli_query($con,$sql);
										/*echo $_POST['radio'];*/
										 $b=$_POST['b']+1; //  Displaying Selected Value
										
							}
							else
							{
								$sql = "INSERT INTO xyz (id,mark)VALUES (0,'".$_POST['radio']."')";
								mysqli_query($con,$sql);
								$b=$_POST['b']+0;
							}

					}
					
							echo "<button type='submit' name='next' style='width:70px;height:30px;background-color: #4CAF50; color: #900;border: 1px solid #900;  font-weight: bold;'>Next</button>";
							echo '<br>';
							echo '<br>';
							//echo "<div id='results'>Total Correct ::  $b</div>";
							
				}	
			
			echo "</fieldset>";
					
		}
		if($row2[0]+1== $a)
		{
			$b=$_POST['b'];
							$u= $_POST['a'] - 1;
							$sql1="SELECT * FROM quiz WHERE qid='$u'";
							$result = mysqli_query($con,$sql1);
							$row1 = mysqli_fetch_array($result);
							if($_POST['radio'] == $row1['woptcode'])
							{$sql = "INSERT INTO xyz (id,mark)VALUES (1,'".$_POST['radio']."')";
								mysqli_query($con,$sql);
										//echo $_POST['radio'];
										 $b=$_POST['b']+1; //  Displaying Selected Value
										
							}
							else
							{$sql = "INSERT INTO xyz (id,mark)VALUES (0,'".$_POST['radio']."')";
								mysqli_query($con,$sql);
								$b=$_POST['b']+0;
							}
						echo "<fieldset style='padding: 3em 2em;' >";
						echo "<legend style='padding: 1em 0.5em;color:green;font-size:200%;text-align:center;'>Quiz Questions</legend>";
					
						$x = ($b*100)/$row2[0];
						echo "<div id='results' style='color:grey'>Total Correct ::  $b</div>";
						echo "<div id='results' style='color:grey'>Total % ::  ".round($x,2)."</div>";
						if(round($x,2)>49)
						{
						echo "<div id='results' style='color:grey'>Status :: PASS</div>";
						}
						else
						{
						echo "<div id='results' style='color:grey'>Status :: Fail</div>";
						}
						$q=0;

						$sql = "SELECT * FROM quiz";
						$sql1 = "SELECT * FROM xyz";
						if ($result = $con->query($sql)) {

  /* fetch associative array */
						$result1 = $con->query($sql1);
							while ($row = $result->fetch_assoc()) {
								$row1 = $result1->fetch_assoc();
								echo "<h3>".($q+1).".  ".$row['Question']."<h3>";echo '<br>';
								
								echo '<p>a) '.$row['opt1'];
								echo '</p>';
								if($row1['id']==0 && $row1['mark']=='a')
									echo "<label style='color:red'>            Wrong Selected. </label>";
								echo '<br>';
								echo '<p>b) '.$row['opt2'];
								
								if($row1['id']==0 && $row1['mark']=='b')
									echo "<label style='color:red'>            Wrong Selected. </label>";
								echo '</p>';
								echo '<br>';
								echo '<p>c) '.$row['opt3'];
								if($row1['id']==0 && $row1['mark']=='c')
									echo "<label style='color:red'>            Wrong Selected. </label>";
								echo '</p>';
								echo '<br>';
								echo '<p>d) '.$row['opt4'];
								if($row1['id']==0 && $row1['mark']=='d')
									echo "<label style='color:red'>            Wrong Selected. </label>";
								echo '</p>';
								echo '<br>';
								if($row1['id']==1)
								{
									echo "You Answer Is Correct :: ";
								}
								else
								{
									echo "You Answer Is Wrong Correct Answer is  :: ";
								}
								echo $row['woptcode'];
								echo "<br>";
								echo "<br>";
								echo "<br>";
								echo "<br>";
								$q=$q+1;
							}
						}
						
						
			echo "</fieldset>";
			?>
			<input type="button" value="End Review" onclick="window.location.href='student.php'" 
           style='width:120px;height:50px;background-color: #4CAF50; color: #900;border: 1px solid #900;  font-weight: bold;'>
<?php
exit;
		}
	}
	
			$a=$a+1;
			echo "<input type='hidden' value='$a' name='a'>";
			
			echo "<input type='hidden' value='$t' name='t'>";
			echo "<input type='hidden' value='$b' name='b'>";
			echo "<input type='hidden' value='$q' name='q'>";
			echo "</form>";
			
			
			
?>


</html>
</body>