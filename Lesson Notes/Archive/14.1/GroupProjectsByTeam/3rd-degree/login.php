<?php
// Include Database Class

include('db.php');

    // Start Database Object
    $db = new DB();

    // check for valid email address before searching database.
    $email = trim($_POST['logInEmail']);

    $reg = '/^[a-zA-Z0-9-_.+]+@[a-zA-Z-_.+]+\.[a-z]{1,6}\.?[a-z]+$/';

    if (preg_match($reg, $_POST['logInEmail']) == 1) {

//         // Write SQL Statement
        $sql = "SELECT * FROM user WHERE email=\"{$_POST['logInEmail']}\"";

//         // Execute SQL Statement
        $results = $db->execute($sql);

//         // check for a matching entry for a registered user
        if ($results->num_rows != 0) {

//             // make a $row variable for results
            $row = $results->fetch_assoc();

            // check for password entered by user matches what is in database
            if ($_POST['password'] == $row['password']) {

                $_SESSION['id'] = $row['id'];

                $status = array('response' => 'ok', 
                    'msg' => 'Welcome'); 

            //password entered doesn't match what is in db
            } else {

                $status = array('response' => 'error', 
                    'msg' => 'Invalid password'); 
                http_response_code(401);

              }
        //email address is not in the db
        } else {

            $status = array('response' => 'error', 
                'msg' => 'Unknown email address');
             http_response_code(400); 

          }
    //email entered by user does not meet reg expression criteria
    } else {

        $status = array('response' => 'error', 
            'msg' => 'Invalid email address'); 
        http_response_code(400);

      }


    header('Content-Type: application/json');

    echo json_encode($status);

// ?>
