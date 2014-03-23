<?php 
	include 'connect.php';
	include 'AdminDAO.php';
	include 'AdminDAOHandler.php';
	$id = $_POST['id'];
	$question = $_POST['question'];
	$answer = $_POST['answer'];
	$first = $_POST['first'];
	$second = $_POST['second'];
	$third = $_POST['third'];
	$fourth = $_POST['fourth'];
	$ADH = new AdminDAOHandler();
	$result = $ADH->edit_question($id,$question,$answer,$first,$second,$third,$fourth);
	if ($result === true){
		echo "<script>alert('Successfully updated');window.location.href='question_admin.php'</script>";
	}else{
		echo "<script>alert('Error to Update');window.location.href='question_admin.php'</script>";

	}
 ?>