<?php 
	include 'connect.php';
	include 'AdminDAO.php';
	include 'AdminDAOHandler.php';
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	if ($password > 35) {
		$password = $_POST['password'];
	}else{
		$password = sha1($_POST['password']);
	}
	$ADH = new AdminDAOHandler();
	$result = $ADH->update_User($id,$fname,$lname,$email,$password);
	if ($result === true){
		echo "<script>alert('Successfully updated');window.location.href='user.php'</script>";
	}else{
		echo "<script>alert('Successfully updated');window.location.href='user.php'</script>";

	}
 ?>