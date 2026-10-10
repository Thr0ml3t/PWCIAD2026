<?php

namespace Models;

use Core\App;
use Core\Database;

class Movie {
    private $conn;
    private $table = 'movies';

    private $fields = [
        'id',
        'title',
        'director',
        'year'
    ];

    public function __construct() {
        $this->conn = App::resolve(Database::class);
    }

    public function all() {
        $rows = $this->conn->query("SELECT * FROM {$this->table}")->get();

        return array_map([$this, 'fromArray'], $rows);
    }

    public function search($term) {
        $rows = $this->conn->query(
            "SELECT * FROM {$this->table} WHERE year LIKE :term OR title LIKE :term",
            ['term' => "%{$term}%"]
        )->get();

        return array_map([$this, 'fromArray'], $rows);
    }

    public function fromArray($data) {
        $movieData = [];
        foreach ($this->fields as $field) {
            if (isset($data[$field])) {
                $movieData[$field] = $data[$field];
            }
        }
        return $movieData;
    }
}
