<?php

    // echo date('d');     // Day
    // echo date('m');        // Month
    // echo date('Y');         // Year
    // echo date('l');         // Day name

    // echo date('d/m/Y');     // for complete date

    // echo date('h');     // Hour
    // echo date('i');     // Min

    // echo date('s');     // Seconds
    // echo date('a');     // AM / PM

    // Set Time zone
    date_default_timezone_set('Pakistan/Rahim_Yar_Khan');

    // date_default_timezone_set('America/New_York');

    // echo date('h:i:sa');     // Full Time

    $timestamp = mktime(10, 45, 25, 8, 9, 2001);    // (hour, min, sec, month, day, year)

    // echo $timestamp;    // it will give seconds spent till current time

    // echo date('d/m/Y h:i:sa', $timestamp);      // to know the date and time of timestamp
    
    $timestamp2 = strtotime('7:00pm March 26, 2012');   // seconds from this timezone to current timezone

    // echo $timestamp2;

    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Days');

    echo date('d/m/Y h:i:sa' , $timestamp5);


?>