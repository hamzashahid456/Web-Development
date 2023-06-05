<?php

    // Require db and config files
    require('config/db.php');
    require('config/config.php');

    // Check for submit
    if(isset($_POST['submit'])){
        // Get Form Data

        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title =  mysqli_real_escape_string($conn, $_POST['title']);
        $author =  mysqli_real_escape_string($conn, $_POST['author']);
        $body =  mysqli_real_escape_string($conn, $_POST['body']);

        $query = "update post set title = '$title', author = '$author', body = '$body' where id = '$update_id' ";

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
        <h1>Add Post</h1>
        <form action="<?php echo $SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">

            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">

            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control"><?php echo $post['body']; ?></textarea>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>
    </div>
<?php include('footer.php') ?>