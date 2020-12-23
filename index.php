<!--
This is the central script of the program.
It makes the connection between views and the controller
Each situation is explained in the script
-->

<?php
require 'controller/controller.php';

$controller = new Controller();

try{
	if (isset($_GET['action'])) { // if it comes from a view, he will always get an action
		if ($_GET['action'] == 'commande' && isset($_POST['produit'])){// if it comes from view/articles_catalog and it has to go to view/recap.php with the name and price of products
			$controller->postProducts($_POST['produit']);
		} elseif ($_GET['action'] == 'commande' && !isset($_POST['produit'])){// if it comes from view/articles_catalog.php, it wants to go to view/recap.php but any products were selected
			$controller->postNoProduct();
		} elseif ($_GET['action'] == 'ajout'){// if it wants to go to view/creation_JSON.php from himself
			if ($_POST['name']!="" && $_POST['price']!=""){// and if there is no name and/or price it come with a warning message
				$controller->addProducts($_POST['name'], $_POST['price'], $_POST['description'], $_POST['image']);
			} else {// else it shows a confirmation message
				$controller->addNoProduct();
			}
		} elseif ($_GET['action'] == 'ajoutView'){//if it comes from another view and it wil to go to view/creation_JSON.php
			$controller->askAddProducts();
		} elseif ($_GET['action'] == 'catalog'){// if it wants to show view/articles_catalog.php
			$controller->postCatalog();
		} elseif ($_GET['action'] == 'confirmation'){// if it comes from view/recap.php and it has to go to view/confirmation.php
			$controller->confirm();
		} elseif ($_GET['action'] == 'json'){// if it wants to go from view/creation_JSON.php to view/JSON.php
			$controller->showJSONfile();
		}
    }
	else{// if it's the first click on the page
		$controller->askChoice();
    }
} catch (Exception $e) {
	echo $e->getMessage();
}