<?php
	include 'connect.php';
	$uname = $_POST['uname'];
	$pass = sha1($_POST['pass']);
	$query = mysql_query("INSERT INTO admin(email,password) VALUES ('$uname','$pass')");
?>