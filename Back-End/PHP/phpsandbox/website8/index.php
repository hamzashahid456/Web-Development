<?php

    // Require db and config files
    require('config/db.php');
    require('config/config.php');

    // Query
    $query = 'select * from post order by created_at desc';

    $res = mysqli_query($conn, $query);

    // Fetch data
    $posts = mysqli_fetch_all($res, MYSQLI_ASSOC);
    // var_dump($posts);        //to see results
    
    // Free Result
    mysqli_free_result($res);

    // Close connection
    mysqli_close($conn);

?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <h1>Posts</h1>
        <?php foreach($posts as $post): ?>
            <div class="well">
                <h3><?php echo $post['title']; ?></h3>
                <small>Created on <?php echo $post['created_at']; ?> by 
                <?php echo $post['author']; ?></small>
                <p><?php echo $post['body']; ?></p>
                <a class="btn btn-default" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More </a><br>
            </div>
        <?php endforeach; ?>
    </div>
<?php include('footer.php') ?>