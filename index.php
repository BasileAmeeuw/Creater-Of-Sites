<?php
require 'controller/controller.php';

$controller = new Controller();

try{
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'commande' && isset($_POST['produit'])){
			$controller->postProducts($_POST['produit']);
		} elseif ($_GET['action'] == 'commande' && !isset($_POST['produit'])){
			$controller->postNoProduct();
		} elseif ($_GET['action'] == 'ajout'){
			if ($_POST['name']!="" && $_POST['price']!=""){
				$controller->addProducts($_POST['name'], $_POST['price'], $_POST['description'], $_POST['image']);
			} else {
				$controller->addNoProduct();
			}
		} elseif ($_GET['action'] == 'ajoutView'){
			$controller->askAddProducts();
		} elseif ($_GET['action'] == 'catalog'){
			$controller->postCatalog();
		} elseif ($_GET['action'] == 'confirmation'){
			$controller->confirm();
		}
    }
	else{
		$controller->askChoice();
    }
} catch (Exception $e) {
	echo $e->getMessage();
}