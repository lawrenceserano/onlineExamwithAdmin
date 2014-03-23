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
</head>

<body style = 'background-color:darkgray;'>
 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<div class = 'container'>
		<div class = 'row'>
			<div class = 'span12'>
				<div class = 'well' style = 'margin-top:30px;'>
					<div class = "brand">
						<center><h2>Admin</h2></center><br><br>
						<div style = 'text-align:center;'>
							<form method = "POST" action = "validate_admin.php">
								<input type = 'email' name = 'uname' placeholder = 'Username'>
								<input type = 'password' name = 'pass' placeholder = 'Password'>
								<button  class = "btn btn-primary">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>