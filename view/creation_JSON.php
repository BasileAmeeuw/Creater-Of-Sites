<!-- 
This view is a view to ask the sender the characteristic of a new product he wants to add in the DB
This view come from view/choice.php, view/articles_catalog.php or view/JSON.php or from himself if the conditions are (not) respected
This view can go to view/JSON.php, to view/articles_catalog.php or to himself if the conditions are (not) respected

-->
<?php if ($HasBeenHad=="yes")
{?>
    Vous avez bien ajouter le produit: "<?php echo $name ?>" au prix de <?php echo $price ?> €

<?php } elseif ($HasBeenHad=="noAdd") {?>
    <p style="color:#FF0000">Vous devez obligatoirement mettre un nom ET un prix pour insérer le produit dans la base de donnée</p>
<?php } ?>

<form action="index.php?action=ajout" method="post">
    <p>
        Nom du produit : <input type="text" name="name" > <br>
        Description : <input type="text" name="description" ><br>
        Prix : <input type="text" name="price" ><br>
        Photo du produit : <input type="text" name="image" ><br>
        <input type="submit" value="Ajouter cette article" />
    </p>
</form>
<div>
<form action="index.php?action=catalog" method="post">
    <input type="submit" value="Voir le site de commande" />       
</form></div>

<form action="index.php?action=json" method="post">
    <input type="submit" value="Voir le fichier JSON" />       
</form></div>

