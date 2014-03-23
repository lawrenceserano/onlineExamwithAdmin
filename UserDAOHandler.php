<?php 
	class UserDAOHandler{
		public function CreateUser($fname,$lname,$uname,$pass)
		{
			try {
				$sql = UserDAO::CreateUser($fname,$lname,$uname,$pass);
				return $sql;
			} catch (Exception $e) {
				error_log("mali");
			}
			return false;
		}
		public function login($uname, $pass)
		{
			try {
				$sql = UserDAO::login($uname, $pass);
				return $sql;

			} catch (Exception $e) {
				error_log("mali");	
			}
			return false;
		}
		public function getQuestion($id)
		{
			try {
				$sql = UserDAO::getQuestion($id);
				return $sql;
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
	}
 ?>