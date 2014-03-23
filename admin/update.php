<?php 
include 'connect.php';
include 'AdminDAO.php';
include 'AdminDAOHandler.php';
$id = $_GET['id'];
$AD = new AdminDAOHandler();
$row = $AD->EditQuestion($id);
 ?>
<html>
<head>
	<title>Question</title>
</head>
<body style = 'background-color:darkgray;'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<div class = "container well" style = ";margin-top:90px" >
		<div class = "row wellko span6" style = "margin-left:240px">
			<form method = "POST" action = "editUser.php">
				<?php foreach ($row as $query) :?>
				<input hidden value = '<?=$id?>' name = 'id'>
				<h3>Question :</h3><input type = 'text'value ='<?=$query['question']?>'  name = "question">
				<div style = "margin-top:10px"><label><font size = "4em">A. <input type = 'text' value = '<?=$query['choiceA']?>' name = "first"></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">B. <input type = 'text' value = '<?=$query['choiceB']?>' name = "second"></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">C. <input type = 'text' value = '<?=$query['choiceC']?>' name = "third"></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">D. <input type = 'text' value = '<?=$query['choiceD']?>' name = "fourth"></font></label></div><br>
				<select name = 'answer'>
					<option value = '<?=$query['answer']?>'><?=$query['answer']?></option>
					<option value = 'a'>a</option>
					<option value = 'b'>b</option>
					<option value = 'c'>c</option>
					<option value = 'd'>d</option>
				</select>
				<button>UPDATE</button>
			<?php endforeach; ?>
			</form>
				<a href="user.php"><button>discard</button></a>
			
			
		</div>
	</div>
</body>
</html>