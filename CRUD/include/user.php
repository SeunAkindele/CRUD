<?php 

	class User extends DB_CRUD {
		protected static $table = "users";
		protected static $fields = array('username', 'password', 'status');

		public $id;
		public $username;
		public $password;
		public $status;

		public static function verify_user($username, $password){

			global $database;
			$username = $database->escape_string($username);
			$password = $database->escape_string($password);

			$sql = "SELECT * FROM  " . self::$table . " WHERE ";
			$sql .= "username = '{$username}' ";
			$sql .= "AND password = '{$password}' ";
			$sql .= "LIMIT 1";

			$the_result_array = self::find_by_query($sql);

			return !empty($the_result_array) ? array_shift($the_result_array) : false;
		}

		public static function verify_login($id){

			global $database;
			
			$sql = "SELECT * FROM  " . self::$table . " WHERE ";
			$sql .= "id = '{$id}' ";
			$sql .= "LIMIT 1";

			$the_result_array = self::find_by_query($sql);

			return !empty($the_result_array) ? array_shift($the_result_array) : false;
		}



	}

?>