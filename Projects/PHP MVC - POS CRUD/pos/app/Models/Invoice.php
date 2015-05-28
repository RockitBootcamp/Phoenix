<?php

namespace App\Models;
use DB;

class Invoice extends Model {
    protected static $table = 'invoice';
    protected static $key = 'id';

    /**
     * Get Items
     */
    public function getItems() {

        // SQL Statement
        $sql = "
            SELECT *, (price * quantity) AS total
            FROM invoice
            JOIN invoice_item ON (invoice.id = invoice_item.invoice_id)
            JOIN item ON (invoice_item.item_id = item.id)
            WHERE invoice.id = :id
            ";

        // Run Statement
        $results = DB::select($sql, ['id' => $this->id]);

        // Return a collection
        return self::makeCollection($results);

    }

}