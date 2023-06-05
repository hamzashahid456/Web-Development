<?php

    $path = "/dir1/myfile.php";

    $file = 'file1.txt';

    // Return filename
    // echo basename($path);

    // Return filename without extension
    // echo basename($path, '.php');

    // Return dirname from path
    // echo dirname($path);

    // To know if file exist
    // echo file_exists($file);

    // Get abs file path
    // echo realpath($file);

    // Check to see if file 
    // echo is_file($file);

    // Check if writeable
    // echo is_writeable($file);

    // Check if readable
    // echo is_readable($file);

    // Get file size
    // echo filesize($file);

    // Create Directory
    // mkdir('Hello', 0777, true);

    // Remove dir if empty
    // rmdir('Hello');

    // Copy file
    // echo copy('file.txt', 'file2.txt');

    // Rename file
    // rename('renamed.txt', 'file1.txt');

    // Delete file
    // unlink('file1.txt');

    // Write from file to string
    // echo file_get_contents($file);

    // Write string to file (overwrite)
    // echo file_put_contents($file, "Good bye World");

    // Append content to file
    // $tmp = file_get_contents($file);
    // $tmp .= "\nHello World";

    // file_put_contents($file, $tmp);
    // echo file_get_contents($file);

    // Open file for reading
    // $handle = fopen($file, 'r');
    // $data = fread($handle, filesize($file));

    // echo $data;

    // Open  file  for writting (will create new if doesn't exist)
    $handle = fopen('MyFile.txt', 'w');
    $txt = "Hamza";
    fwrite($handle, $txt);
    fclose($file);


?>


