<?php

namespace Models;

use Core\App;
use Core\Database;

class User{
    private $table = 'users';
    private $conn;

    public function __construct() {
        $this->conn = App::resolve(Database::class);
    }

    public function findByEmail($email) {
        $stmt = $this->conn->query("SELECT * FROM {$this->table} WHERE email = :email", ['email' => $email]);

        return $stmt->first(); 
    }

    public function findById($id) {
        $stmt = $this->conn->query("SELECT * FROM {$this->table} WHERE id = :id", ['id' => $id]);

        return $stmt->first(); 
    }
}