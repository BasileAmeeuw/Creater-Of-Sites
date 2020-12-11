<?php $title = "Commander vos produits" ?>


<?php ob_start(); ?>
<?php if ($ProductPres=="no"){?>
    <div class="avertissement">
        Vous devez choisir au moins un article pour activer votre commande :)
    </div>

<?php } ?>

<form action="index.php?action=commande" method="post">
    <span id="form"></span>
    <input type="submit" id="Commander" name="Commander" value="Commander">
</div></form>
<form action="index.php?action=ajoutView" method="post">
    <input type="submit" id="ajout" name="ajout" value="ajout">
</form>


<?php $content = ob_get_clean(); ?>
<script src="public/js/ajax.js"></script>
<?php require('template.php'); ?>

