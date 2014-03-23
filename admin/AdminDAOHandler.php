<?php 
	class AdminDAOHandler{
		public function Login($uname,$pass){
			try {
				$sql = AdminDAO::Login($uname,$pass);
				return $sql;
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public function Get_Question()
		{
			try {
				$sql = AdminDAO::Get_Question();
				return $sql;
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public function delete_question($id)
		{
			try {
				$sql = AdminDAO::delete_question($id);
				return $sql;
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public function EditQuestion($id)
		{
			try {
				$sql = AdminDAO::EditQuestion($id);
				return $sql;
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public function edit_question($id,$question,$answer,$first,$second,$third,$fourth)
		{
			try {
				$sql = AdminDAO::edit_question($id,$question,$answer,$first,$second,$third,$fourth);
				return $sql;
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public function Get_User()
		{
			try {
				$sql = AdminDAO::Get_User();
				return $sql;
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public function EditUser($id)
		{
			try {
				$sql = AdminDAO::EditUser($id);
				return $sql;
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public function update_User($id,$fname,$lname,$email,$password)
		{
			try {
				$sql = AdminDAO::update_User($id,$fname,$lname,$email,$password);
				return $sql;
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public function delete_user($id)
		{
			try {
				$sql = AdminDAO::delete_user($id);
				return $sql;
			} catch (Exception $e) {
				error_log('Error!');
			}
			return false;
		}
		public function AddQuestion($question,$answer,$first,$second,$third,$fourth)
		{
			try {
				$sql = AdminDAO::AddQuestion($question,$answer,$first,$second,$third,$fourth);
				return $sql;
			} catch (Exception $e) {
				error_log('mali');
			}
			return false;
		}
	}
 ?>