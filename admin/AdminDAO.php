<?php 
	class AdminDAO{
		public static function Login($uname,$pass){
			try {
				global $db;
				$query = "SELECT * from admin Where email = '$uname' and password = '$pass' ";
				$result = $db->query($query);
				if ($result->num_rows>0) {
			    	return $result->fetch_assoc();	
			    }else{
			    	return false;
			    }
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public static function Get_Question()
		{
			try {
				global $db;
				$query = "SELECT * FROM questionare";
				$result = $db->query($query);
				if ($result->num_rows > 0) {
					$array = array();
					while ($row =$result->fetch_assoc()) {
						$array[] = $row;
					}
				}
				return $array;
			} catch (Exception $e) {
				error_log("Error");
			}
		}
		public static function EditQuestion($id)
		{
			try {
				global $db;
				$query = "SELECT * FROM questionare where id = '$id'";
				$result = $db->query($query);
				if ($result->num_rows > 0) {
					$array = array();
					while ($row =$result->fetch_assoc()) {
						$array[] = $row;
					}
				}
				return $array;
			} catch (Exception $e) {
				error_log("Error");
			}
		}
		public static function delete_question($id)
		{
			try {
				global $db;
				$query = "DELETE FROM questionare Where id = '$id'";
				$result = $db->query($query);
				return $result;
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public static function delete_user($id)
		{
			try {
				global $db;
				$query = "DELETE FROM examinee Where id = '$id'";
				$result = $db->query($query);
				return $result;
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public static function AddQuestion($question,$answer,$first,$second,$third,$fourth)
		{
			try {
				global $db;
				$sql = "INSERT into questionare (question, answer, choiceA, choiceB, choiceC, choiceD) VALUES ('$question','$answer','$first','$second','$third','$fourth')";
				$result = $db->query($sql);
				return $result;
			} catch (Exception $e) {
				error_log('mali');
			}
			return false;
		}
		public function edit_question($id,$question,$answer,$first,$second,$third,$fourth)
		{
			try {
				global $db;
				$query = "UPDATE questionare set question = '$question', answer = '$answer', choiceA ='$first',choiceB = '$second',choiceC = '$third',choiceD = '$fourth' where id = '$id' ";
				$result = $db->query($query);
				return $result;
			} catch (Exception $e) {
				error_log('Error');
			}
			return false;
		}
		public static function Get_User()
		{
			try {
				global $db;
				$query = "SELECT * FROM examinee";
				$result = $db->query($query);
				if ($result->num_rows > 0) {
					$array = array();
					while ($row =$result->fetch_assoc()) {
						$array[] = $row;
					}
				}
				return $array;
			} catch (Exception $e) {
				error_log("Error");
			}
		}
		public static function EditUser($id)
		{
			try {
				global $db;
				$query = "SELECT * FROM examinee where id = '$id'";
				$result = $db->query($query);
				if ($result->num_rows > 0) {
					$array = array();
					while ($row =$result->fetch_assoc()) {
						$array[] = $row;
					}
				}
				return $array;
			} catch (Exception $e) {
				error_log("Error");
			}
		}
		public static function update_User($id,$fname,$lname,$email,$password)
		{
			try {
				global $db;
				$query = "UPDATE examinee set fname = '$fname', lname = '$lname', email = '$email', password = '$password' where id = '$id'";
				$result = $db->query($query);
				if ($result->num_rows > 0) {
					$array = array();
					while ($row =$result->fetch_assoc()) {
						$array[] = $row;
					}
				}
				return $array;
			} catch (Exception $e) {
				error_log("Error");
			}
		}
	}
 ?>