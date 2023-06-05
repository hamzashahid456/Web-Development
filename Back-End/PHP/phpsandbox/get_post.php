<?php
    // Sending data through URL
    if( isset ($_GET['name']) ){
        // echo $_GET['name'];      // to get name that we submitted
        // print_r($_GET);

        // echo htmlentities($_GET['name']);       // to not give chance to hacker/attacker 
        
        $name = htmlentities($_GET['name']);
    }

    // // Send data through headers
    // // Use POST in avoidance of transparence of data
    // if( isset ($_POST['name']) ){
    //     // print_r($_POST);

    //     // echo htmlentities($_POST['name']);       // to not give chance to hacker/attacker 
    // }

    // // Using REQUEST (can be use for both i.e GET/POST)
    // if( isset ($_REQUEST['name']) ){
    //     // print_r($_POST);

    //     // echo htmlentities($_REQUEST['name']);       // to not give chance to hacker/attacker 
    // }

    // We can also use this (only for 'GET' method)
    // echo $_SERVER['QUERY_STRING'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Website</title>
    </head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label>Name</label> <br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label> <br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>

    <ul>
        <li>
            <a href="get_post.php?name=Hamza">Hamza</a>
        </li>
        <li>
            <a href="get_post.php?name=Noman">Noman</a>
        </li>
    </ul>
        <h1> <?php echo "{$name}'s Profile"; ?> </h1>
    </body>
</html>