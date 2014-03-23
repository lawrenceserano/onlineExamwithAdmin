<html>
<head>
	<title>Online Examination</title>
		<style type="text/css">
			#style2{
				font-family: georgia;
				font-size: 15px;
				border: 2px solid black;
				width: 480px;
				margin-left: 214px;
				padding-top: 17px;
					}
		</style>
		
		<style type="text/css">
			#style1{
				font-family: georgia;
				font-size: 15px;
				border: 2px solid black;
				width: 200px;
				margin-left: 50px;
				padding-top: 17px;
				margin-top: 10px;
					}
		</style>
</head>

<body style = 'background-color:darkgray;'>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<div class = 'container'>
		<div class = 'row'>
			<div class = 'span12'>
				<div class = 'well' style = 'margin-top:30px;'>
					<div class = "brand">
						<center><h2>Exam Web App</h2></center><br><br>
						<div style = 'text-align:center;' id = "style1">
							<form method = "POST" action = "select.php">
								<input type = 'email' name = 'uname' placeholder = 'Username'>
								<input type = 'password' name = 'pass' placeholder = 'Password'>
								<button  class = "btn btn-primary">Login</button>
							</form>
							<div id = "style2">
								<form method = 'POST' action = 'insert.php'>
									<center><h2>Register</h2></center>
									<input type = 'text' name = 'fname' placeholder = 'Firstname'><br>
									<input type = 'text' name = 'lname' placeholder = 'Lastname'><br>
									<input type = 'email' name = 'uname' placeholder = 'Username'><br>
									<input type = 'password' name = 'pass' placeholder = 'Password'><br>
									<button class = "btn btn-primary">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>