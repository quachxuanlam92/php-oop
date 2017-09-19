<?php 
	require_once 'config.php';
	class crud extends dbconfig{
		public function __construct(){
			parent::__construct();
		}
		public function getData($query){
			$result = $this->conn->query($query);
			if($result == false){
				return false;
			}
			$rows = array();
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}

		public function excute($query){
			$result = $this->conn->query($query);
			if($result == false){
				echo 'Error: loi';
				return false;
			}
			else{
				return true;	
			}
		}

		
	}
?>