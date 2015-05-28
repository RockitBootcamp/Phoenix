<?php

namespace App\Models;
use DB;

class Customer extends Model {
    protected static $table = 'customer';
    protected static $key = 'id';

    /**
     * Remove
     */
    public function remove() {

        // SQL Statement
        $sql = "
            DELETE FROM customer
            WHERE id = :id
            ";

        // Run Statement
        $results = DB::delete($sql, ['id' => $this->id]);

    }

}