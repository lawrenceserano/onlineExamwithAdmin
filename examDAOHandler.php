<?php 
	class examDAOHandler{
		public function computeScore($answer)
		{
			try {
				$sql = examDAO::computeScore($answer);
				return $sql;
			} catch (Exception $e) {
				error_log("error");
			}
			return false;
		}
		public function PostScore($ans,$id)
		{
			try {
				$sql = examDAO::PostScore($ans,$id);
				return $sql;
			} catch (Exception $e) {
				error_log('error!');
			}
			return false;
		}
	}
 ?>