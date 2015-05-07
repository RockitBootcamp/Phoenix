<?php
// Include Database Class
include('db.php');

// Start Database Object
    $db = new DB();
    // check for valid email address before searching database.

    $reg = '/^[a-zA-Z0-9-_.+]+@[a-zA-Z-_.+]+\.[a-z]{1,6}\.?[a-z]+$/';

    if (preg_match($reg, $_POST['email']) == 1) {

        // Write SQL Statement
        $sql = "SELECT * FROM user 
        WHERE email=\"{$_POST['email']}\"";

        // Execute SQL Statement
        $results = $db->execute($sql);

        // check for a matching entry for a registered user
        if ($results->num_rows != 0) {

            // already registered, might offer password recovery from here.

            $status = array('response' => 'error', 
                'msg' => 'This address is already registered.');
             http_response_code(400); 


        } else {

            $sql="INSERT INTO user (email, password)
            VALUES (\"{$_POST['email']}\", \"{$_POST['password']}\")";

            $results = $db->execute($sql);

            $status = array('response' => 'ok', 
                    'msg' => 'Welcome'); 
            
        }

    }

    header('Content-Type: application/json');

    echo json_encode($status);


?>