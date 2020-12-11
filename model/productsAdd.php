<?php

function addProducts2JSON($name,$price,$description,$urlImage){
    $filename="./public/js/Products.json";
    // data strored in array
    if (!file_exists($filename)){
        $lectureBDD = Array(Array(
            "name" => $name,
            "price" => $price,
            "description" => $description,
            "image" => $urlImage
        ));
    } else {
        $jsonBDD = file_get_contents("./public/js/Products.json");
        $lectureBDD=json_decode($jsonBDD);
        array_push($lectureBDD, Array (
            "name" => $name,
            "price" => $price,
            "description" => $description,
            "image" => $urlImage
        ));
    }


    //$lectureBDD =Array();
    // encode array to json
    $json = json_encode($lectureBDD);
    file_put_contents($filename, $json); 
}