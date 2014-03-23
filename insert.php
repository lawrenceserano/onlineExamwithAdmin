<?php
	include 'connect.php';
	include 'UserDAO.php';
	include 'UserDAOHandler.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$pass = sha1($_POST['pass']);
	$UDH = new UserDAOHandler();
	$query = $UDH->CreateUser($fname,$lname,$uname,$pass);
	if($query){
		echo "<script>alert('You have your account!!!');window.location.href='reg.php'</script>";
	}else{
		echo "error";
	}
?>