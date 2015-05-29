<?php 
namespace App\Models;


use DB;

class User {

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;

    /**
     * Save (Call Insert or Update)
     */
    public function save() {
        if (empty($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    /**
     * Create
     */
    private function insert() {

        // SQL
        $sql = "
            INSERT INTO user (first_name, last_name, email, phone)
            VALUES (:first_name, :last_name, :email, :phone)
            ";

        // Execute
        //DB::insert();
    }

    /**
     * Update User
     */
    private function update() {
        


    }

    /**
     * Delete
     */
    public static function delete($id) {



    }


    /**
     * Get User
     */
    public static function get($id) {

        // SQL
        $sql = "
            SELECT *
            FROM user
            WHERE id = :id";

        // Execute
        $row = DB::selectOne($sql, ['id' => $id]);

        // Start a new User Object
        $user = new User();

        // populate the user object here

        return $user;
    }

    // Get All Users
    public static function getAll() {
        

    }

}
