<?php
	include 'connect.php';
	include 'UserDAOHandler.php';
	include 'UserDAO.php';
	$uname = $_POST['uname']; 
	$pass = sha1($_POST['pass']);
	$UDH = new UserDAOHandler();
	$result = $UDH->login($uname,$pass);
	session_start();
	$_SESSION['num'] = $result['id'];
	if($result > 0){
		echo "<script>alert('You may now start your examination...');window.location.href='question.php'</script>";
	}else{
		echo "<script>alert('Invalid username or password..');window.location.href='reg.php'</script>";
	}

?>
