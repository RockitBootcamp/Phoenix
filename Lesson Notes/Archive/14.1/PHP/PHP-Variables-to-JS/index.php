<?php

// Initial Includes
include('payload.php');

// Add something to the JavaScript Payload
Payload::$values['foo'] = 'bar';

// Make a page title
$title = 'Hello';

// Include View
include('view.php');