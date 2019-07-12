<!DOCTYPE html>
<html>

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<body>
<div id="page-wrap">


<form method="post" action="deletequiz.php">
 
<fieldset style='padding: 3em 2em;' >
				<legend style='padding: 1em 0.5em;color:green;font-size:200%;text-align:center;'>Delete Quiz</legend>
			
 <table>
 <tr>
 <td><h2>Delete Quiz</h2></td>
 <td><input type="text" name="quizname" id="gunjan-textbox"/></td>
 <td><button type='submit' name='next' style='width:120px;height:50px;background-color: #4CAF50; color: #900;border: 1px solid #900;  font-weight: bold;'>Delete</button></td>
 </tr>

</table>


</fieldset >

</form>




 <form method="post" action="LOGIN.php">
 
<fieldset style='padding: 3em 2em;' >
				<legend style='padding: 1em 0.5em;color:green;font-size:200%;text-align:center;'>Quiz Questions</legend>
				
			
 
 <table>
 <tr>
 <td><h2>Enter Quiz Name</h2></td>
 <td><input type="text" name="quizname" id="gunjan-textbox"/></td>
 </tr>
 <tr>
 <td><h2>Enter Question here </h2></td>
 <td><input type="text" name="question" id="gunjan-textbox"/></td>
 </tr>
 <tr>
 <td>Enter First option</td>

 <td><input type="text" name="opt1" id="gunjan-textbox" /></td>
 </tr>
 <tr>
 <td>Enter Second option</td>
 <td><input type="text" name="opt2" id="gunjan-textbox" /></td>
 </tr>
 <tr>
 <td>Enter Third option</td>
 <td><input type="text" name="opt3" id="gunjan-textbox" /></td>
 </tr>
 <tr>
 <td>Enter Fourth option</td>
 <td><input type="text" name="opt4" id="gunjan-textbox" /></td>
 </tr>
 <tr>
 <td>Select Right Option code</td>
 <td><select name="woptcode" id="gunjan-textbox">
 <option value="a">A</option>
 <option value="b">B</option>
 <option value="c">C</option>
 <option value="d">D</option>
 </select>
 </td>
 </tr>
 <tr>
 <td colspan="2">
<button type='submit' name='next' style='width:120px;height:50px;background-color: #4CAF50; color: #900;border: 1px solid #900;  font-weight: bold;'>Add Question</button>

 </td>
 
 <td colspan="2">
<input type="button" value="Save Quiz" onclick="window.location.href='teacher.php'" 
           style='width:120px;height:50px;background-color: #4CAF50; color: #900;border: 1px solid #900;  font-weight: bold;'>

 </td>
 </tr>
 </table>
 </fieldset>
 </form>

</html>
</body>