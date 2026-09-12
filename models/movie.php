<?php

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