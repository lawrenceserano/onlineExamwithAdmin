<?php 
include 'connect.php';
include 'AdminDAO.php';
include 'AdminDAOHandler.php';
$question = $_POST['question'];
$answer = $_POST['answer'];
$first = $_POST['first'];
$second = $_POST['second'];
$third = $_POST['third'];
$fourth = $_POST['fourth'];
$AD = new AdminDAOHandler();
$row = $AD->AddQuestion($question,$answer,$first,$second,$third,$fourth);
	if ($result == true){
		echo "<script>alert('Successfully updated');window.location.href='question_admin.php'</script>";
	}else{
		echo "<script>alert('New Question Added');window.location.href='question_admin.php'</script>";

	}
 ?>