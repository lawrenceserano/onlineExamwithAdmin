<?php 
	include 'connect.php';
	include 'AdminDAOHandler.php';
	include 'AdminDAO.php';
	$id = $_GET['id'];
	$ADH = new AdminDAOHandler();
	$result = $ADH->delete_question($id);
	if ($result === true) {
		echo "<script>alert('Successfully Deleted');window.location.href='question_admin.php'</script>";
	}else{
		echo "<script>alert('Cannot be Deletes');window.location.href='question_admin.php'</script>";
	}
 ?>
