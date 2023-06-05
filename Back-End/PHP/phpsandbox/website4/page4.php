<?php 
    session_start();

    unset($_SESSION['name']);

    // print_r($_SESSION);

    // Destroy Session
    session_destroy();
?>