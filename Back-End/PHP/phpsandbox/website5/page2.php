<?php
    
    // Reset Cookie
    // setcookie('username', 'John', time()+3600);

    // Delete cookie
    // setcookie('username', 'John', time()-3600);

    if( isset($_COOKIE['username']) ) {
        echo 'User '.$_COOKIE['username'].' is set <br>';
    } else {
        echo 'User is not set';
    }

    // Cookies before
    if( count($_COOKIE) ){
        echo '<br>There are '.count($_COOKIE).' cookies saved';
    } else {
        echo '<br>There is no cookie saved';
    }