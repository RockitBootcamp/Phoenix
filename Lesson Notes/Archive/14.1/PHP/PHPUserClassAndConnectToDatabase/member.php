<?php

class Member extends User {

	public $friends;

	public function __construct($db, $user_id) {
		
		// Write SQL Statement
		$sql = "
			SELECT *
			FROM user
			WHERE user_id = $user_id";

		// Execute SQL Statement
		$results = $db->execute($sql);

		// Ensure user exists, exit if not
		if ($results->num_rows == 0) {
			exit('user doesnt exist');
		}

		// Get's a Row
		$row = $results->fetch_assoc();

		// Remember user data for later
		$this->name = $row['name'];
		$this->friends = $row['friends'];
	}

}