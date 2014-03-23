<?php 
include 'connect.php';
include 'AdminDAO.php';
include 'AdminDAOHandler.php';
$AD = new AdminDAOHandler();
$row = $AD->Get_User();
 ?>
<html>
<head>
	<title>User</title>
</head>
<body style = 'background-color:darkgray;'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<div class = "container well" style = ";margin-top:90px" >
		<div class = "row wellko span6" style = "margin-left:240px">
			<a href="home_admin.php"><button>homepage</button></a>
			<?php foreach ($row as $query) :?>
				<h3>User</h3>
				<div style = "margin-top:10px"><label><font size = "4em">FirstName: <?=$query['fname']?></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">LastName: <?=$query['lname']?></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">UserName: <?=$query['email']?></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">Score: <?=$query['score']?></font></label></div><br>
			<?php endforeach; ?>

		</div>
	</div>
</body>
</html>