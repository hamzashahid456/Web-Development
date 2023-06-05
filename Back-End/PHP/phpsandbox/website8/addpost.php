<?php

    // Require db and config files
    require('config/db.php');
    require('config/config.php');

    // Check for submit
    if(isset($_POST['submit'])){
        // Get Form Data
        $title =  mysqli_real_escape_string($conn, $_POST['title']);
        $author =  mysqli_real_escape_string($conn, $_POST['author']);
        $body =  mysqli_real_escape_string($conn, $_POST['body']);

        $query = "insert into post(title, author, body) values('$title', '$author', '$body')";

        if(mysqli_query($conn, $query)){
            // Successful
            header('Location: '.ROOT_URL);
        } else {
            echo 'ERROR: '.mysqli_error($conn);
        }
    }

?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <h1>Add Post</h1>
        <form action="<?php echo $SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">

            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control">

            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>
    </div>
<?php include('footer.php') ?>