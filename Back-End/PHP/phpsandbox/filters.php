<?php
    // Check for posted data
    // if(filter_has_var(INPUT_POST, 'data')) {
    //     echo 'Data Found';
    // } else {
    //     echo 'No Data';
    // }

    // Email validation
    // if(filter_has_var(INPUT_POST, 'data')) {
    //     $email = $_POST['data'];

    //     // Remove illegal characters from email
    //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    //     echo $email.'<br>';

    //     if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         echo 'Email is valid';
    //     } else {
    //         echo 'Email is not valid';
    //     }
    // }


    /*
        FILTER_VALIDATE_BOOLEAN
        FILTER_VALIDATE_EMAIL
        FILTER_VALIDATE_FLAOT
        FILTER_VALIDATE_INT
        FILTER_VALIDATE_IP
        FILTER_VALIDATE_REGEXP
        FILTER_VALIDATE_URL


        FILTER_SANITIZE_EMAIL
        FILTER_SANITIZE_ENCODED
        FILTER_SANITIZE_NUMBER_FLOAT
        FILTER_SANITIZE_NUMBER_INT
        FILTER_SANITIZE_SPECIAL_CHARS
        FILTER_SANITIZE_STRING
        FILTER_SANITIZE_URL
    */

    // Integer validation
    $var = 30;

    if(filter_var($var, FILTER_VALIDATE_INT)) {
        // echo $var.' is a number.';
    } else {
        // echo $var.' is not a number.';
    }

    // To get only integers
    $tmp = 'df1561scsdcs5c1d61c8d';
    // var_dump(filter_var($tmp, FILTER_SANITIZE_NUMBER_INT));

    // To get rid of special  characters
    $temp = '<script>alert(1)</script>';
    // echo filter_var($temp, FILTER_SANITIZE_SPECIAL_CHARS);


    // $filters = array(
    //     "data" => FILTER_VALIDATE_EMAIL,
    //     "data2" => array(
    //         "filter" => FILTER_VALIDATE_INT,
    //         "options" => array(
    //             "min_range" => 1,
    //             "max_range" => 100
    //         )
    //     )
    // );

    // print_r(filter_input_array(INPUT_POST, $filters));


    $arr = array(
        "name" => "hamza",
        "age" => "25",
        "email" => "hamza@gmail.com"
    );

    $filter = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"      // ucwords for capitalize name
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => "20",
                "max_range" => "50"
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filter));
?>

<form method="post" aciton="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>