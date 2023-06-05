<?php
    // Execute code for number of times

    /*
        While
        Do-while
        For
        Foreach
    */

    // Same as c++
    
    // For loop
    // for($i = 0; $i < 10; $i++){
    //     echo (' Hello '.$i);
    //     echo '<br>';
    // }

    // While loop
    // $i = 0;

    // while($i < 10){
    //     echo (' Hello '.$i);
    //     echo '<br>';

    //     $i++;
    // }

    // Do while loop
    // $i = 0;
    // do{
    //     echo (' Hello '.$i);
    //     echo '<br>';

    //     $i++;
    // }
    // while($i < 10);

    // Foreach loop

    // $people = array('Ahmed', 'Ali', 'Umar', 'Abu Bakar');

    // foreach($people as $person){
    //     echo ($person.' is fired from his job');
    //     echo '<br>';
    // }

    $info = array('Ahmed' => 'ahmed@gmail.com', 'Ali' => 'ali@gmail.com', 'Umar' => 'umar@gmail.com', 'Abu Bakar' => 'abubakar@gmail.com');


    foreach($info as $person => $email){
        echo ('Name is: '.$person.' and their email is: '.$email);
        echo '<br>';
    }


?>
