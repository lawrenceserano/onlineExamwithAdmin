<?php 
class examDAO{
	public static function getAnswers()
	{
		try{
			global $db;
			$ansque = "SELECT answer from questionare order by id";
			$result = $db->query($ansque);
			$answer = array();
			while($rows = $result->fetch_assoc()){
				$answer[] = $rows['answer'];
			}
			return $answer;

		}catch(Exception $e){
			error_log($e->getMessage());
		}
		return false;
	}
	public static function computeScore($answer)
	{
		try{
			$correct = self::getAnswers();
			if($correct === false){
				error_log("answer are not ready");
				return false;
			}if(count($correct) != strlen($answer)){
				error_log("wew");
				return false;
			}
				
			$val = 0;
			for ($a = 0; $a < 10 ; $a++) { 
				if($correct[$a] == $answer[$a]){
					$val++;
				}
			}
			return $val;
		}catch(Exception $e){
			error_log($e->getMessage());
		}
	}
	public static function PostScore($ans,$id)
	{
		try {
			global $db;
			$query = "UPDATE examinee set score = '$ans' where id = '$id'";
			$result = $db->query($query);
		} catch (Exception $e) {
			error_log('error!');
		}
		return false;
	}
}
 ?>