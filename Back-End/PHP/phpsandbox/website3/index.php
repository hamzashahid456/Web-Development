<?php
    // Message vars
    $msg = '';
    $msgClass = '';

    // Check for submit button
    if(filter_has_var(INPUT_POST, 'submit')){
        // Get Form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check Required Fields
        if(!empty($name) && !empty($email) && !empty($message)){
            // passed
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Passed email
                // Receipt Email
                $toEmail = 'hamzashahid4566@gmail.com';
                $subject = 'Contact Request From '.$name;
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4> <p>'.$name.'</p>
                    <h4>Email</h4> <p>'.$email.'</p>
                    <h4>Message</h4> <p>'.$message.'</p>
                ';  

                // Email Headers
                $headers = "MIME-Version: 1.0"."\r\n";
                $headers .= 'Content-Type:text/html;charset=UTF-8'."\r\n";

                // Additional Headers
                $headers .= "From: ".$name."<".$email.">"."\r\n";

                if( mail($toEmail, $subject, $body, $headers) ){
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }

            } else {
                // Failed email
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            }

            // $msg = 'Form Submitted';
            // $msgClass = 'alert-success';

        } else {
            // Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
                  
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css">

</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg != ''): ?>
                <div class="alert <?php echo $msgClass ?>"><?php echo $msg; ?></div>
            <?php endif; ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div> 
            <div class="form-group">
                <label>Message</label>
                <textarea type="text" name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    <div>
</body>
</html>