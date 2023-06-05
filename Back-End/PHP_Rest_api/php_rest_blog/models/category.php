<?php
    class Category{
        // DB Stuff
        private $conn;
        private $table = "categories";

        // Properties
        public $id;
        public $name;
        public $created_at;

        // Constructor with DB
        public function __construct($db){
            $this->conn = $db;
        }

        // Get Categories
        public function read(){
            // Create Query
            $query = 'select
                    id,
                    name
                from '.$this->table.'
                order by
                    created_at desc';

            // Prepare Statement
            $stmt = $this->conn->prepare($query);

            // Execute Query
            $stmt->execute();

            return $stmt;
        }

    }