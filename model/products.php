<?php 

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

