<?php
    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/category.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect(); 

    // Instantiate category Object
    $category = new Category($db);

    // Category Read query
    $result = $category->read();

    // Get row count
    $num = $result->rowCount();

    // Check if any categories
    if($num > 0){
        // cat array
        $cat_arr = array();
        $cat_arr['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $cat_item = array(
                'id' => $id,
                'name' => $name
            );

            // Push to "data"
            array_push($cat_arr['data'], $cat_item);
        }

        // Turn to json and output
        echo json_encode($cat_arr);

    } else {
        // No categories
        echo json_encode(
            array('message' => 'No Categories Found')
        );

    } 