<?php
    // Sessions are used to share data between multiple pages
    // (Data will be saved in server)
    if( isset($_POST['submit']) ){
        session_start();        // start the session

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        header('Location: page2.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Sessions</title>
</head>
<body>
    <div class="container">
        <div class="form-group">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="text" name="name" placeholder="Enter name"> 
                <br>
                <input type="text" name="email" placeholder="Enter email">
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form> 
        </div>
    </div>
</body>
</html>