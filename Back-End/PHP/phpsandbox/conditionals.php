<?php

    /*
        == matches value
        === matches value and data types
        <
        >
        <=
        >=
        !=
        !==
    */

    // $num = 5;
    // if($num == 5){
    //     echo "5 passed";
    // } else if($num == 10){
    //     echo "10 passed";
    // }else {
    //     echo "Did not passed";
    // }

    $num = 5;

    // if($num < 10){
    //     if($num > 4){
    //         echo "Value is valid";
    //     }
    // }

    // Logical
    if($num < 10 && $num > 4 ) {
        echo "Value is valid";
    }

?>