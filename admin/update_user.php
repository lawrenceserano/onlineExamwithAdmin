<?php 
include 'connect.php';
include 'AdminDAO.php';
include 'AdminDAOHandler.php';
$id = $_GET['id'];
$AD = new AdminDAOHandler();
$row = $AD->EditUser($id);
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
				<input type = 'hidden' value = '<?=$id?>' name = 'id'>

				<h3>Question :</h3><input type = 'text'value ='<?=$query['fname']?>'  name = "fname">
				<div style = "margin-top:10px"><label><font size = "4em">firstName: <input type = 'text' value = '<?=$query['lname']?>' name = "lname"></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">LastName: <input type = 'email' value = '<?=$query['email']?>' name = "email"></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">Password: <input type = 'password' value = '<?=$query['password']?>' name = "password"></font></label></div><br>
				<button>UPDATE</button>
			<?php endforeach; ?>
			</form>
				<a href="user.php"><button>discard</button></a>
			
			
		</div>
	</div>
</body>
</html>