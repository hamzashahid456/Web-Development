<?php
    session_start();

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = $_SESSION['email'];

    print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Sessions</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>
    <a href="page4.php">GO to page 4</a>
</body>
</html>