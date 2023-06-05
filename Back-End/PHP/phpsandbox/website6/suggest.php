<?php

    $people[] = "Hamza";
    $people[] = "Abbas";
    $people[] = "Adam";
    $people[] = "Mosa";
    $people[] = "Umar";
    $people[] = "Faizan";
    $people[] = "Ali";
    $people[] = "Hussain";

    // Get Query String

    $q = $_REQUEST['q'];

    $suggestion = "";

    // Get suggestions
    if($q != ""){
        $q = strtolower($q);
        $len = strlen($q);
        foreach($people as $person){
            if( stristr($q, substr($person, 0, $len)) ) {
                if( $suggestion === "" ){
                    $suggestion = $person;
                } else {
                    $suggestion .= ", $person";
                }
            }
        }
    }

    echo $suggestion === "" ? "No Suggestion" : $suggestion;
