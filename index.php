<?php
require 'controller/controller.php';
try{
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'commande' && isset($_POST['produit'])){
			postProducts($_POST['produit']);
		} elseif ($_GET['action'] == 'commande' && !isset($_POST['produit'])){
			postNoProduct();
		} elseif ($_GET['action'] == 'ajout'){
			if ($_POST['name']!="" && $_POST['price']!=""){
				addProducts($_POST['name'], $_POST['price'], $_POST['description'], $_POST['image']);
			} else {
				addNoProduct();
			}
		} elseif ($_GET['action'] == 'ajoutView'){
			askAddProducts();
		} elseif ($_GET['action'] == 'catalog'){
			postCatalog();
		} elseif ($_GET['action'] == 'confirmation'){
			confirm();
		}
    }
	else{
		askChoice();
    }
} catch (Exception $e) {
	echo $e->getMessage();
}