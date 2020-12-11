
<?php if ($HasBeenHad=="yes")
{?>
    Vous avez bien ajouter le produit: "<?php echo $name ?>" au prix de <?php echo $price ?> €

<?php } elseif ($HasBeenHad=="noAdd") {?>
    Vous devez obligatoirement mettre un nom ET un prix pour insérer le produit dans la base de donnée
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

