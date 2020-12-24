<?php 

/*
class ProductsManager manages all what about products
*/
class ProductsManager
{
    /*
    function getProducts get all the products that are chosen by the shopper in a table and the prices too.
    $productsName is a table with all the names of products and $productsPrice is a table with all the prices of products.
    Send an exception if there are more than "#" in $nameHashPrice
    Send an exception if there are not found in an array
    */
    function getProducts($nameHashPrice){
        if (is_array($nameHashPrice)){
            
            $namePrice=array();
            $productsName=array(); $productsPrice=array();
            for ($i=0;$i<count($nameHashPrice);$i++)
            {
                $productsExploded=explode("#",$nameHashPrice[$i]);
                if (count($productsExploded)==2){
                    $productsName[$i]=$productsExploded[0];
                    $productsPrice[$i]=$productsExploded[1];
                } else {
                    throw new Exception("Il y a une erreur dans la commande, sûrement un # qui se trouve dans le nom ce qui n'est pas possible",1);
                }
                
            }
            $namePrice[0]=$productsName;
            $namePrice[1]=$productsPrice;
            return $namePrice;
        } else {
            throw new Exception("Le nom et le prix doivent se trouver dans un array",2);
        }
        
    }

    /*
    function addProducts2JSON is a function needed to add the products in the JSON file
    description and image are setted by default if there aren't anyone
    */
    function addProducts2JSON($name,$price,$description,$urlImage,$filename="./public/js/Products.json"){
        if ($description==""){
            $description="No description";
        } 
        if ($urlImage==""){
            $urlImage='https://fordogtrainers.org/images/stories/virtuemart/product/pas-d-image-disponible.jpg';
        }
        if (!file_exists($filename)){
            $lectureBDD = Array(Array(
                "name" => $name,
                "price" => $price,
                "description" => $description,
                "image" => $urlImage
            ));
        } else {
            $jsonBDD = file_get_contents($filename);
            $lectureBDD=json_decode($jsonBDD);
            if ($jsonBDD==""){
                $jsonBDD="[]";
                file_put_contents($filename, $jsonBDD);
                $lectureBDD=Array();
            }
            array_push($lectureBDD, Array (
                "name" => $name,
                "price" => $price,
                "description" => $description,
                "image" => $urlImage
            ));
        }
        $json = json_encode($lectureBDD);
        file_put_contents($filename, $json); 
    }
}


