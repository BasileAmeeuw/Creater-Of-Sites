<!-- 
This view is the main view to show all articles that man can find in the JSON file
It can come from view/creation_JSON.php, view/choice.php, view/JSON.php, view/confirmation.php, view/recap.php (from all the views) or from himself if the conditions are not respected
It can only go to view/creation_JSON.php, view/recap.php and to himself if the conditions are not respected
-->

<?php $title = "Commander vos produits" ?>


<?php ob_start(); ?>
<?php if ($ProductPres=="no"){?>
    <div style="color:#FF0000" class="avertissement">
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

