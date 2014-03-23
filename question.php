<?php 
include 'connect.php';
include 'UserDAOHandler.php';
include 'UserDAO.php';
session_start();
define('number',10);
$answer = (isset($_POST['answer'])) ? $_POST['answer']:"";
$id = (isset($_POST['id'])) ? $_POST['id']+1:1;
$answers = (isset($_POST['choices'])) ? $_POST['choices']:"";
$UDH = new UserDAOHandler();
$query = $UDH->getQuestion($id);
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
<script type="text/javascript" src = "jquery.1.10.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#start').click(function(){
		if($('#A').is(":checked")){
			return true;
		}
		else if($('#B').is(":checked")){
			return true;
		}		
		else if($('#C').is(":checked")){
			return true;
		}	
		else if($('#D').is(":checked")){
			return true;
		}
		else{
			alert("Enter your answer!");
			return false;
		}
		});
	});
</script>
<body style = 'background-color:darkgray;'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<center>
	<div class = "container well" style = ";margin-top:90px" >
		
		<div class = "row wellko span6" style = "margin-left:240px">
			<h3>Question :<?=$query['question']?></h3>
		</div>
		<div class = "row wellko span6" style = "margin-left:240px">
			<form method = "post" action = "question.php">
				<input type = "hidden" value = "<?=$answer?>" name = "answer">
				<input type = "hidden" value = "<?=$id?>" name = "id">
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