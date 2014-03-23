<?php 
include 'connect.php';
session_start();
define('number',10);
$answer = (isset($_POST['answer'])) ? $_POST['answer']:"";
$id = (isset($_POST['id'])) ? $_POST['id']+1:1;
$answers = (isset($_POST['choices'])) ? $_POST['choices']:"";
$sql = "SELECT * FROM questionare";
$result  = mysql_query($sql);
$query = mysql_fetch_assoc($result); 
$answer .= $answers;
if($id > number){
	$_SESSION['answer'] = $answer;
	$_SESSION['id'];
	header("Location: place.php");
}
$id = $query['id'];
 ?>
<html>
<head>
	<title>Question</title>
</head>
<body style = 'background-color:darkgray;'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<center>
	<div class = "container well" style = ";margin-top:90px" >
		
		<div class = "row wellko span6" style = "margin-left:240px">
			<h3>Question :<?=$query['question']?></h3>
		</div>
		<div class = "row wellko span6" style = "margin-left:240px">
			<form method = "post" action = "question.php">
				<div class = "page-header" style = "margin-top:-6px"><label><font size = "4em"><input type = "radio" name = "choices" value = "a" id = "A" ><?=$query['choiceA']?></font></label></div><br>
				<div class = "page-header" style = "margin-top:-6px"><label><font size = "4em"><input type = "radio" name = "choices" value = "b" id = "B" ><?=$query['choiceB']?></font></label></div><br>
				<div class = "page-header" style = "margin-top:-6px"><label><font size = "4em"><input type = "radio" name = "choices" value = "c" id = "C" ><?=$query['choiceC']?></font></label></div><br>
				<div class = "page-header" style = "margin-top:-6px"><label><font size = "4em"><input type = "radio" name = "choices" value = "d" id = "D" ><?=$query['choiceD']?></font></label></div><br>
				<input type = "submit" id = "start" value = 'Submit' class = "btn btn-info" style = "width:200px;height:40px;margin-top:10px;">
			</form>
		</div>
	</div>
</center>
		</body>
</html>