<?php 
	
	require_once ("db_connect.php");
	
	class Database {
		public $connection;

		function __construct () {
			$this->intialise_db_connection();
		}

		public function intialise_db_connection () {
			$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if ($this->connection->connect_error) {
				die("Database connection failed: " . $this->connection->connect_error);
			}
		}

		public function query($sql) {
			$result = $this->connection->query ($sql);
			$this->confirm_query($result);
			return $result;
		}

		public function confirm_query($result) {
			if (!$result) {
				die("Query failed: " . $this->connection->connect_error);
			}
		}

		public function escape_string($string){
			$escaped_string = $this->connection->real_escape_string($string);
			return $escaped_string;
		}

		public function the_insert_id () {
			return mysqli_insert_id ($this->connection);
		}
	}	

	$database = new Database();// this calls the constructor automatucally and any function inside the constructor

?>