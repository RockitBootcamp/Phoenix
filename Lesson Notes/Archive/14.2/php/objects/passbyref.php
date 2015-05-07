<?php

function foo(&$p1) {
	$p1++;
	echo $p1;
}

$x = 6;

foo($x);

echo $x;