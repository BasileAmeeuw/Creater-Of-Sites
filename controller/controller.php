<?php 
require_once 'model/CommandManager.php';
require_once 'model/ProductsManager.php';

/*
class Controller makes the relation between model and view.
*/
class Controller
{
    /*
    function postCatalog to see all the products on a page.
    */
    function postCatalog()
    {   
        $ProductPres="yes";
        
        require 'view/articles_catalogue.php';
    }

    /*
    function postProducts to show all products chose by the shoppers
    Send $productsName (name of the products), $productsPrice (price of the products) and $total (sum of the prices of the products)
    These were sent to the page recap
    */
    function postProducts($nameHashPrice)
    {
        $product = new ProductsManager();
        $command = new CommandManager();
        $nameAndPrice=$product->getProducts($nameHashPrice);
        $productsName=$nameAndPrice[0];
        $productsPrice=$nameAndPrice[1];
        $total=$command->totalPrice($productsPrice);
        
        require 'view/recap.php';
    }
    /*
    function postNoProduct is set to publish again the page with all the products 
    with a warning saying that you can't go to command without any products chosen.
    $ProductPres let the page of products known that there isn't any articles chosen.
    */
    function postNoProduct()
    {
        $ProductPres="no";

        require 'view/articles_catalogue.php';
    }

    /*
    function addProducts is a backend function needed to put the new product in the DataBase which is a JSON file.
    We enter the name ($name), the price ($price), a description ($description) and an url for an image ($image)
    */
    function addProducts($name,$price,$description,$urlImage,$filename="./public/js/Products.json")
    {
        $product = new ProductsManager();
        $product->addProducts2JSON($name,$price,$description,$urlImage,$filename);
        $HasBeenHad="yes";

        require 'view/creation_JSON.php';
    }

    /*
    function askAddProducts is just to show the view page to add a new product
    $HasBeenHad is needed to say that no Products were supposed to be added.
    */
    function askAddProducts()
    {
        $HasBeenHad="no";

        require 'view/creation_JSON.php';
    }

    /*
    function addNoProduct is a function which is needed to oblige the site's owner to fil in a name and a price for an article
    $HasBeenHad is needed to say that a product was supposed to be added but not with the good condition.
    */
    function addNoProduct()
    {
        $HasBeenHad="noAdd";

        require 'view/creation_JSON.php';
    }

    /*
    function askChoices shows the view to chose between adding a product or seeing the catalog with all the products.
    */
    function askChoice()
    {
        require 'view/choice.php';
    }

    /*
    function confirm is to show to the client that the command is done.
    */
    function confirm()
    {
        require 'view/confirmation.php';
    }
}
