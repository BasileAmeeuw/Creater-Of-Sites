<?php 
require_once 'model/command.php';
require_once 'model/products.php';
require_once 'model/productsAdd.php';

function postCatalog()
{   
    $ProductPres="yes";
    
    require 'view/articles_catalogue.php';
}

function postProducts($nameHashPrice)
{
    $nameAndPrice=getProducts($nameHashPrice);
    $productsName=$nameAndPrice[0];
    $productsPrice=$nameAndPrice[1];
    $total=totalPrice($productsPrice);
    
    require 'view/recap.php';
}

function postNoProduct()
{
    $ProductPres="no";

    require 'view/articles_catalogue.php';
}

function addProducts($name,$price,$description,$urlImage)
{
    addProducts2JSON($name,$price,$description,$urlImage);
    $HasBeenHad="yes";

    require 'view/creation_JSON.php';
}

function askAddProducts()
{
    $HasBeenHad="no";

    require 'view/creation_JSON.php';
}

function addNoProduct()
{
    $HasBeenHad="noAdd";

    require 'view/creation_JSON.php';
}

function askChoice()
{
    require 'view/choice.php';
}

function confirm()
{
    require 'view/confirmation.php';
}






