<?php

//Initial commit GA

error_reporting(E_ALL);
ini_set('display_errors', 'on');


//************	START: DB Connection Check


class DB {
	
	private $link;
	public $connected = "DB is connected";

	public function __construct($db_host, $db_username,$pwd, $db_name)  {
		
		$this->link = new mysqli($db_host, $db_username,$pwd, $db_name);

		if ($this->link->connect_errno) {
		    die('Connection Error: ' . $link->connect_error);
		}
		else {
			// echo "Connected to ".$db_host . "<br>";
		}
	} //end __construct


// Method in the class DB, to execute any mySQL stmts on DB.
// The Create, Retrieve, Update, Delete all call this.
	public function execute($sql) {

		// Trim Whitespace
		$sql = trim($sql); 
		
		// Execute Query
		$results = $this->link->query($sql);

		// Successful
		if ($results !== FALSE) {
			return $results;
		
		// Fail
		} else {
			exit('SQL Error: ' . $this->link->error . "<br><br>" . $sql);
		}
	} //end method execute


// Create = Insert, a row into database
	public function create($table_name, $sql_values) {

		// Prepare values for SQL
		foreach ($sql_values as $field => $value) {
			$sql_values[$field] = "'" . trim($value) . "'";
		}

		// Create a row
		$sql =  "INSERT INTO `{$table_name}` (`" . implode('`, `', array_keys($sql_values)) . "`) VALUES (" . implode(', ', $sql_values) . ")";
		echo $sql . "<br>";
		return $this->execute($sql);

	} //end Create row into DB


// Retrieve a row in DB
	public function retrieve($table_name, $sql_values) {

		// Prepare values for SQL
		foreach ($sql_values as $field => $value) {
			$sql_values[$field] = "'" . trim($value) . "'";
		}

		//Create Retrieve statement
		$sql =  "SELECT * FROM `{$table_name}` WHERE (`" . implode('`, `', array_keys($sql_values)) . "`) = (" . implode(', ', $sql_values) . ")";
		echo $sql . "<br>";
		return $this->execute($sql);
	}


//Update a row in DB
	public function update($table_name, $sql_values) {

		// Prepare values for SQL
		foreach ($sql_values as $field => $value) {
			$sql_values[$field] = "'" . trim($value) . "'";
		}

		// Create UPDATE statement
		$sql =  "REPLACE INTO `{$table_name}` (`" . implode('`, `', array_keys($sql_values)) . "`) VALUES (" . implode(', ', $sql_values) . ")";
		echo $sql . "<br>";
		return $this->execute($sql);

	} //end Update a row into DB	


// Delete a record in database
	public function delete($table_name,$sql_values) {
	
		// Prepare values for SQL
		foreach ($sql_values as $field => $value) {
			$sql_values[$field] = "'" . trim($value) . "'";
		}

		// Create DELETE statement
		$sql =  "DELETE FROM `{$table_name}` WHERE (`" . implode('`, `', array_keys($sql_values)) . "`) = (" . implode(', ', $sql_values) . ")";
		echo $sql . "<br>";
		return $this->execute($sql);

	} // end of delete a row in DB


} //end class DB

























