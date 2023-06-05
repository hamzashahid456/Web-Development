<?php
    $host = 'localhost';
    $user = 'hamza';
    $password = 'hamza123';
    $dbname = 'pdoposts';

    // Set DSN (Data Source Name)
    $dsn = 'mysql:host='. $host .';dbname='.$dbname;

    // Create PDO Instance
    $pdo = new PDO($dsn, $user, $password);

    // If you want to get rid of PDO::FETCH... and want to set it default
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // To make limit 1 workable
    // $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // PDO Query
    // $stmt = $pdo->query('select * from posts');

    // For looping through data and get it
    // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     echo  $row['title'] . '<br>';
    // }

    // while($row = $stmt->fetch()){
    //     echo  $row->title . '<br>';
    // }

    // Prepared Statements (prepare and execute)

    // Unsafe
    // $sql = "select * from posts where author = $author";

    // Fetch multiple posts

    // User input
    $author = "Hamza";
    $is_published = true;
    $id = 1;

    // Positional params
    // $sql = 'select * from posts where author = ?';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$author]);
    // $posts = $stmt->fetchAll();

    // Named params
    // $sql = 'select * from posts where author <> :author && is_published = :is_published';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['author' => $author, 'is_published' => $is_published]);
    // $posts = $stmt->fetchAll();

    // var_dump($posts);
    // Lets loop through it
    // foreach($posts as $post){
    //     echo $post->title .'<br>';
    // }


    // Fetch single post
    // $sql = 'select * from posts where id = :id';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['id' => $id]);
    // $post = $stmt->fetch();

    // echo $post->title .'<br>';
    // echo $post->body .'<br>';

    // Get row count
    // $stmt = $pdo->prepare('select * from posts where author = ?');
    // $stmt->execute([$author]);
    // $postCount = $stmt->rowCount();

    // echo $postCount;


    // Insert Data
    // $title = "Post Five";
    // $author = "Hamza";
    // $body = "This is post five";

    // $sql = 'insert into posts(title, author, body) values(:title, :author, :body)';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['title' => $title, 'author' => $author, 'body' => $body]);
    // echo 'Post added';

    // Update Data
    // $title = "Post Five";
    // $body = "This is post five which is now updated";

    // $sql = 'update posts set body = :body where title = :title';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['body' => $body, 'title' => $title]);
    // echo 'Post updated';

    // Delete Data
    // $title = "Post Five";

    // $sql = 'delete from posts where title = :title';
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['title' => $title]);
    // echo 'Post deleted';

    // Search Data
    $search = "%post%";
    $sql = 'select * from posts where title like ?';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$search]);
    $posts = $stmt->fetchAll();

    foreach($posts as $post){
        echo $post->title . '<br>';
        // echo $post->author . '<br>';
        // echo $post->body . '<br>';
    }





     