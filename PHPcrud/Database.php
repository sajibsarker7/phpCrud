<?php

	class Database{

		public $host = DB_HOST;
		public $user = DB_USER;
		public $pass = DB_PASS;
		public $name = DB_NAME;

		public $link;
		public $error;

		public function __construct(){
			$this->connecDb();
		}

		private function connecDb(){
			$this->link = new mysqli($this->host,$this->user,$this->pass,$this->name);

			if (!$this->link) {
				$error = "connection fail".$this->link->connect_error;
			}
		}

		public function select($dbSelect){
			$result = $this->link->query($dbSelect) or die ($this->link->error.__LINE__);
			
			
			if ($result -> num_rows > 0 ) {
				return $result;
			} else {
				return false;
			}
			
		}



		



	}