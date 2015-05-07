<?php

class DB {

    // Link to database
    private $link;

    /**
     * Constructor
     */
    public function __construct() {

        // Connect to the database
        $this->link = new mysqli("rockit.ccyd2ljjwzet.us-east-1.rds.amazonaws.com","3rddegree","rockit","3rddegree");
        // $this->link = new mysqli("localhost","root","","3rddegree");
        // If the connection had problem, output that now
        if ($this->link->connect_errno) {
            die('Connection Error: ' . $link->connect_error);
        }

    }

    /**
     * Execute SQL Statement
     */
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

    }
    public function lastId() {
        return $this->link->insert_id;
    }

}
