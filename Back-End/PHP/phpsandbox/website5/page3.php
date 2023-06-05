<?php
    // Save more than one data in cookie
    $user = [
        "name" => "Hamza",
        "email" => "hamza@gmail.com",
        "age" => "30"
    ];

    $user = serialize($user);       // prepare the data to store => otherwise cookie data will not be stored

    setcookie('user', $user, time() + (86400 * 30));    // expiry of one day

    // unserialize for getting data
    $tmp = unserialize( $_COOKIE['user'] );
    print_r($tmp);
?>