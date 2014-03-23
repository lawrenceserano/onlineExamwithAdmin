<?php 
include 'connect.php';
include 'AdminDAO.php';
include 'AdminDAOHandler.php';
$AD = new AdminDAOHandler();
$row = $AD->Get_Question();
 ?>
<html>
<head>
	<title>Question</title>
</head>
<body style = 'background-color:darkgray;'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<div class = "container well" style = ";margin-top:90px" >
		<div class = "row wellko span6" style = "margin-left:240px">
			<a href="home_admin.php"><button>homepage</button></a>
			<a href="addQuestion.php"><button>Add Question</button></a>
			<?php foreach ($row as $query) :?>
				<h3>Question :<?=$query['question']?></h3>
				<div style = "margin-top:10px"><label><font size = "4em">A. <?=$query['choiceA']?></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">B. <?=$query['choiceB']?></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">C. <?=$query['choiceC']?></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">D. <?=$query['choiceD']?></font></label></div><br>
				<a href="update.php?id=<?=$query['id']?>"><button>UPDATE</button></a>
				<a href="delete.php?id=<?=$query['id']?>"><button onclick = "return confirm('are you sure you want to delete this Question ?')">DELETE</button></a>
			<?php endforeach; ?>

		</div>
	</div>
</body>
</html>