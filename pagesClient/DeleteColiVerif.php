<?php
require  ROOT . '/config/config.php';
$q = 'SELECT local.id_local, local.numero, local.rue, local.ville, local.pays, local.dimension, local.capacite, local.prix, local.description, 
    categorie_local.type, image.nom FROM local INNER JOIN localcategorie ON local.id_local=localcategorie.local 
    INNER JOIN categorie_local On categorie_local=localcategorie.categorie_local 
    INNER JOIN image ON image.id_local=local.id_local WHERE local.id_local=:local ';
$stmt = $bdd->prepare($q);
$data = $stmt->execute(['local'=>$_GET['local']]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="col-md-6">


    <div style="margin:5px; padding:5px 5px; text-align: center;">
        <img src="<?php echo 'image/locaux/'.$result['nom'] ?>" style="height: 200px;">
        <div class="form-group">
            <label>Id : </label> <?php echo ' ' . $result['id_local'] ?>
        </div>
        <div class="form-group">
            <label>Adresse : </label><?= $result['numero'] . ' '. $result['rue'] . ', ' . $result['ville'] . ' '. $result['pays'] ?>
        </div>
        <div class="form-group">
            <label>Capacité :</label><?php echo ' ' . $result['capacite'] ?>
        </div>

        <div class="form-group">
            <label>Prix :</label><?php echo ' ' . $result['prix'] . ' €'?>
        </div>
        <div class="form-group">
            <label>Description :</label><?php echo ' ' . $result['description'] ?>
        </div>

        </form>
        <div class="form-action">
            <a href="?p=local" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour </a>
            <?php echo '<a href="?p=delete&local=' . $result['id_local']. ' " class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>'
            ?>
        </div>
    </div>

    </div>
</div>
