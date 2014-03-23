<?php 
	class UserDAO{
		public static function CreateUser($fname,$lname,$uname,$pass)
		{
			try {
				global $db;
				$query = "INSERT INTO examinee(fname,lname ,email,password) VALUES ('$fname','$lname','$uname','$pass')";
				$result = $db->query($query);
				return $result;
			} catch (Exception $e) {
				error_log("mali");
			}
			return false;
		}
		public static function login($uname, $pass)
		{
			try {
				global $db;
			    $query = "SELECT * from examinee Where email = '$uname' and password = '$pass' ";
			    $sql = $db->query($query);
			    if ($sql->num_rows>0) {
			    	return $sql->fetch_assoc();	
			    }else{
			    	return false;
			    }

			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public static function getQuestion($id)
		{
			try {
				global $db;
				$sql = "SELECT * FROM questionare WHERE id = '$id'";
				$result = $db->query($sql);
				return $result->fetch_assoc();
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
	}
 ?>