<?php
    if( isset($_POST['submit']) ){
        $username = $_POST['username'];

        // set cookie (data will be saved in browser)
        setcookie('username', $username, time()+3600 );
        // 1 hour   (After an hour it's going to expire)

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
                <input type="text" name="username" placeholder="Enter username"> 
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form> 
        </div>
    </div>
</body>
</html>