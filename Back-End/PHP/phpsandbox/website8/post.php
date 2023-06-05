<?php

    // Require db file
    require('config/db.php');
    require('config/config.php');

    if(isset($_POST['delete'])){
        // Get Form Data

        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

        $query = " delete from post where id = '$delete_id' ";

        if(mysqli_query($conn, $query)){
            // Successful
            header('Location: '.ROOT_URL);
        } else {
            echo 'ERROR: '.mysqli_error($conn);
        }
    }


    // Get id
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Query
    $query = 'select * from post where id=' .$id;

    $res = mysqli_query($conn, $query);

    // Fetch data
    $post = mysqli_fetch_assoc($res);
    // var_dump($posts);        //to see results
    
    // Free Result
    mysqli_free_result($res);

    // Close connection
    mysqli_close($conn);

?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
        <h1><?php echo $post['title']; ?></h1>
        <small>Created on <?php echo $post['created_at']; ?> by 
        <?php echo $post['author']; ?></small>
        <p><?php echo $post['body']; ?></p>
        <hr>
        <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="delete_id" value="<?php echo $post['id'] ?>">
            <input type="submit" value="delete" name="delete" class="btn btn-danger">
        </form>
        <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id'];?>" class="btn btn-default">Edit</a>
    </div>
<?php include('footer.php') ?>