<?php
	include 'connect.php';
	include 'AdminDAO.php';
	include 'AdminDAOHandler.php';

	$uname = $_POST['uname'];
	$pass = sha1($_POST['pass']);
	$ADH = new AdminDAOHandler();
	$result = $ADH->Login($uname,$pass);
	if($result > 0){
		echo "<script>alert('You may now start...');window.location.href='home_admin.php'</script>";
	}else{
		echo "<script>alert('Invalid username or password..');window.location.href='login_admin.php'</script>";
	}


?>
