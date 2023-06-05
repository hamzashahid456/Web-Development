<?php

    class Post{
        // DB Stuff
        private $conn;
        private $table = "posts";

        // Post Properties
        public $id;
        public $category_id;
        public $category_name;
        public $title;
        public $body;
        public $author;
        public $created_at;

        // Constructor with DB
        public function __construct($db){
            $this->conn = $db;
        }

        // Get Post
        public function read(){
            // Create Query
            $query = 'select
                    categories.name as category_name,
                    posts.id,
                    posts.category_id,
                    posts.title,
                    posts.body,
                    posts.author,
                    posts.created_at
                from '.$this->table.'
                left join 
                    categories on posts.category_id = categories.id
                order by
                    posts.created_at desc';

            // Prepare Statement
            $stmt = $this->conn->prepare($query);

            // Execute Query
            $stmt->execute();

            return $stmt;
        }

    // Get single post
    public function read_single(){
        $query = 'select
            categories.name as category_name,
            posts.id,
            posts.category_id,
            posts.title,
            posts.body,
            posts.author,
            posts.created_at
        from '.$this->table.'
        left join 
            categories on posts.category_id = categories.id
        where 
            posts.id = ?
        limit 0,1';

        $stmt = $this->conn->prepare($query);

        // Bind ID
        $stmt->bindParam(1, $this->id);

        // Execute Query
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Set proporties
        $this->title = $row['title'];
        $this->body = $row['body'];
        $this->author = $row['author'];
        $this->category_id = $row['category_id'];
        $this->category_name = $row['category_name'];
    }

    // Create Post
    public function create(){
        $query = "insert into $this->table
        set 
        title = :title,
        body = :body,
        author = :author,
        category_id = :category_id";

        // Prepare statements
        $stmt = $this->conn->prepare($query);

        // Clean data
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->body = htmlspecialchars(strip_tags($this->body));
        $this->author = htmlspecialchars(strip_tags($this->author));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));

        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':body', $this->body);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':category_id', $this->category_id);

        // Execute Query
        if( $stmt->execute() ){
            return true;
        } else {
            // Print error if something goes wrong
            printf('Error %s \n', $stmt->error);
            return false;
        }
    }

    // Update Post
    public function update(){
        $query = "update $this->table
        set 
        title = :title,
        body = :body,
        author = :author,
        category_id = :category_id
        where id = :id";

        // Prepare statements
        $stmt = $this->conn->prepare($query);

        // Clean data
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->body = htmlspecialchars(strip_tags($this->body));
        $this->author = htmlspecialchars(strip_tags($this->author));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':body', $this->body);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':category_id', $this->category_id);
        $stmt->bindParam(':id', $this->id);

        // Execute Query
        if( $stmt->execute() ){
            return true;
        } else {
            // Print error if something goes wrong
            printf('Error %s \n', $stmt->error);
            return false;
        }
    }


    // Delete Post
    public function delete(){
        // Create Query
        $query = "Delete from $this->table where id = :id";

        // Prepare statements
        $stmt = $this->conn->prepare($query);

        // Clean Data
        $this->id = htmlspecialchars(strip_tags($this->id));

        // Bind data
        $stmt->bindParam(':id', $this->id);
        // Execute Query
        if( $stmt->execute() ){
            return true;
        } else {
            // Print error if something goes wrong
            printf('Error %s \n', $stmt->error);
            return false;
        }
    }

    

}