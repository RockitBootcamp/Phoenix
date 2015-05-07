<?php

/**
 * Payload
 */
class Payload {

	// Collect Payload Values as Array
	public static $values = Array();

	// Render Payload into JSON
	public function render() {
		return json_encode(self::$values);
	}
}