<!-- 
This view is to show to the sender the JSON file quickly so that he has not to go in the JSON file directly
This view should not be in the site if it comes public.
This view can only come from view/creation_JSON.php
This view can go to view/creation_JSON.php or to view/articles_catalog.php
-->

<?php

var_dump($json_data); 
?>

<form action="index.php?action=catalog" method="post">
    <input type="submit" id="catalog" name="Voir le résultat du catalogue en ligne" value="Voir le résultat du catalogue en ligne">
</form> 
<br>
<form action="index.php?action=ajoutView" method="post">
    <input type="submit" id="Ajouter_un_produit" name="Retourner en arriere pour ajouter a nouveau" value="Retourner en arriere pour ajouter a nouveau"> 
</form>