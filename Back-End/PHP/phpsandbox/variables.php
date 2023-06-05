<?php
// single line comment
#single line comment
/*
  multiline comment
*/
  $s1 = 'Hello';
  $s2 = 'world';
  $concat = $s1.' '.$s2;    // concatination
  $concat2 = '$s1 $s2';     // it will not work
  $concat3 = "$s1 $s2";     // but it will

  $demo = 'Hello this is php';

  $mark = "They're here";
  $mark = 'They\'re here';    // same way to insert single quotation

  // Defining constant var (constants are case sensitive, if you want not to make it case sensitive put third argument as true )
  define('GREETING', 'Hello to PHP', true);   // for constants no need to put $(dollar) sign

  // echo greeting;
?>
