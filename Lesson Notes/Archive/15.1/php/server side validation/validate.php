<?php

class Validate {

	public $errorMessages = [];

	public function zipCode($zip) {
		if (!preg_match('/^[0-9]{5}$/', $zip)) {
			$this->errorMessages[] = 'Invalid Zip Code';
		} 
	}

	public function notNumber($text) {
		if (!preg_match('/^[a-zA-Z]+$/', $text)) {
			$this->errorMessages[] = 'Not a number';
		} 
	}

}