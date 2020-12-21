<?php 
class ProductsManager
{
    function getProducts($nameHashPrice){
        $namePrice=array();
        $productsName=array(); $productsPrice=array();
        for ($i=0;$i<count($nameHashPrice);$i++)
        {
            $productsExploded=explode("#",$nameHashPrice[$i]);
            if (count($productsExploded)==2){
                $productsName[$i]=$productsExploded[0];
                $productsPrice[$i]=$productsExploded[1];
            } else {
                throw new Exception("erreur dans la commande de pizza");
            }
            
        }
        $namePrice[0]=$productsName;
        $namePrice[1]=$productsPrice;
        return $namePrice;
    }

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
}


