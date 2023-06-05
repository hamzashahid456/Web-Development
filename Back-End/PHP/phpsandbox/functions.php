<?php

// Block of code that can be repeatedly call

/*
    - Camel case => myFUncitons()
    - Lower case => my_function()
    - Pascal case => MyFunction()
*/

// Create simple function
function temp(){
    echo 'Hello World';
}
// calling function
// temp();

// Function with param
function sayHello($name){
    echo "Hello $name <br>";
}

// sayHello('Asad');
// sayHello('Umer');

// Return function
function addNumbers($n1, $n2){
    return $n1+$n2;
}

// echo addNumbers(10,20);

// By reference
$numb = 10;

function addFive($num){
    $num += 5;
}

function addTen(&$num){
    $num += 10;
}

addFive($numb);
echo "Val: $numb <br>";

addTen($numb);
echo "Val: $numb <br>";

?>