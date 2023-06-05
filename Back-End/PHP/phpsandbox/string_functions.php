<?php
    // substr()
    // Returns portion of the string

    // $tmp = substr('Hello', 2);      // it will start from the 2th index
    // echo $tmp;

    // $tmp2 = substr('Hello', 1, 3);      // it will start from the 1st index and ends at 3rd index
    // echo $tmp2;

    // strlen()     returns length of string
    
    // $str = 'Hello world';
    // echo strlen($str);

    // strpos()
    // Finds the position of first occurance of sub string

    // $str = strpos('Hello world', 'r');
    // echo $str;

    // strrpos()
    // Finds the position of Last occurance of sub string

    // $str = strrpos('Hello world', 'o');
    // echo $str;

    // trim()
    // Strips whitespace
    // var_dump() gives us info about var
    // $text = 'Hello World      ';     // gives us counting the white spaces
    // var_dump($text);

    // $trimmed = trim($text);          gives us without counting the white spaces
    // var_dump($trimmed);
    
    // strtoupper()   every string to uppercase
    // $text = strtoupper('hello world');
    // echo $text;

    // strtolower()   every string to lowercase
    // $text = strtolower('HELLO WORLD');
    // echo $text;

    // ucwords()   capitalize every word
    // $text = ucwords('hwllo world');
    // echo $text;

    // str_replace()
    // replace all occuring string to replaced val

    // $txt = 'hello world';
    // $text = str_replace('world', 'everyone', $txt);
    // echo $text;

    // is_string()
    // check if string
    // $txt = 'hello world';
    // echo is_string($txt);

    // gzcompress
    // Compress string
    $string = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
    Nemo inventore sunt culpa eius commodi eaque voluptatem dolor dolores esse maiores, 
    repudiandae nisi aut facilis harum earum quos nobis dolorum eos.";

    $compressed = gzcompress($string);
    echo $compressed;

    // to get it original
    $original = gzuncompress($compressed);
    echo $original;

    // to get rid of your insecurities XD
    echo strlen($string); 
    echo strlen($original);