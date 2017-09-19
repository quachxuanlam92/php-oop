<?php
	class dbconfig{
		private $__host = "localhost";
		private $__user = "root";
		private $__pass = "";
		private $__db = "db_test";
		protected $conn;
		public function __construct(){
			if(!isset($this->conn)){
				$this->conn = mysqli_connect($this->__host, $this->__user, $this->__pass, $this->__db);
				if(!$this->conn){
					echo "khong the ket noi db";
					exit();
				}
			}
			return $this->conn;
		}
	}

?>