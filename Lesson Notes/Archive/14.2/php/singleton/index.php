<?php

class DB {

	private $link
	private static $i = NULL;

	public function __construct() {

		$this->link = new mysqli("localhost", "user", "password", "database");
		if ($link->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
		}

	}

	public static function init() {
		if (empty(self::$i)) {
			self::$i = new DB();
		}
		return self::$i;
	}

	public static function execute($sql) {
		$db = DB::init();
		mysql_query($sql, $db->link);
	}

}