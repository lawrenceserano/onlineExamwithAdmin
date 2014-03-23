<html>
<head>
	<title>Question</title>
</head>
<body style = 'background-color:darkgray;'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<div class = "container well" style = ";margin-top:90px" >
		<div class = "row wellko span6" style = "margin-left:240px">
			<form method = "POST" action = "add.php">
				<h3>Question :</h3><input type = 'text' name = "question">
				<div style = "margin-top:10px"><label><font size = "4em">A. <input type = 'text' name = "first"></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">B. <input type = 'text' name = "second"></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">C. <input type = 'text' name = "third"></font></label></div><br>
				<div style = "margin-top:-6px"><label><font size = "4em">D. <input type = 'text' name = "fourth"></font></label></div><br>
				<select name = 'answer'>
					<option value = 'a'>a</option>
					<option value = 'b'>b</option>
					<option value = 'c'>c</option>
					<option value = 'd'>d</option>
				</select>
				<button>Save</button>
			</form>
				<a href="user.php"><button>discard</button></a>
			
			
		</div>
	</div>
</body>
</html>