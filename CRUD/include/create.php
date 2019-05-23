<?php 

	class News extends DB_CRUD {
		protected static $table = "news";
		protected static $fields = array('title', 'text', 'date', 'time', 'status');

		public $id;
		public $title;
		public $text;
		public $date;
		public $time;
		public $status;

		public static function count_post() {

			global $database;

			

			$sql = "SELECT * FROM " . self::$table . " ";
		

			$result = self::count_posts($sql);
			if($result >= 1){
				return $result;
			} else {
				return "";
			}

		}

		public static function count_unread_post() {

			global $database;

			$sql = "SELECT * FROM " . self::$table . " WHERE status = 0 ";

			$result = self::count_posts($sql);
			if($result >= 1){
				return $result;
			} else {
				return "";
			}

		}

	}

?>