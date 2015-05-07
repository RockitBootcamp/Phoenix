<?php

class Math {

	public static $result;

	public static function add($n1, $n2) {
		self::$result += $n1 + $n2;
		return self::$result;
	}

}

// Static Context
$output = Math::add(3, 7);
echo $output . '<br>';

$output = Math::add(1, 1);
echo $output;