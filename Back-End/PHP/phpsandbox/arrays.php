<?php

    // Arrys  = variable that holds multiple values
    /*
        - Indexed
        - Assosiative
        - Multi-dimentional

    */
    
    // Indexed
    $people = array('Ali', 'Ahmed', 'Faizan');

    $ids = array(5, 25, 50, 100);

    $cars = array('Honda', 'Toyota', 'Ford');
    $cars[2] = 'Mustang';
    $cars[] = 'BMW';    // add value to array at last index


    // echo $cars[3];
    // echo count($cars);      

    // print_r($cars);     // print all values in array
    // var_dump($cars);    // give detailed info about array           

    
    // Assosiative Arrays ( same as dictionaries in python )
    $arr = array('Ali' => 35, 'Ahmed' => 50, 'Asad' => 45);
    $arr['Hamza'] = 420;    // adds at last index

    $arr2 = array(5 => 'Ahmed', 10 => 'Umar');

    // echo $arr2[10];


    //  Multidimentional arrays
    $carss = array(
        array('Toyota', 'Black', 1.5),
        array('Honda', 'Grey', 1.8),
        array('Bmw', 'Black', 3.0)
    );

    echo $carss[1][1]; 



?>