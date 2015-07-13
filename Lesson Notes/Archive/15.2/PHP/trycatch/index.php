<?php

function connectToDatabase() {
    $connection = true;
    if ($connection) {
        return $connection;
    } else {
        throw new Exception('We dont have a db connection');
    }
}

function doesUserExist() {
    $connection = connectToDatabase();
    return true;
}

function deleteUser() {
    if (doesUserExist()) {
        echo 'here is the code to delete the user';
    } else {
        echo 'cant delete user';
    }
}



try {
    deleteUser();
} catch (Exception $e) {
    echo 'Things went wrong: ' . $e->getMessage();
}