<?php
	include '../composent/header.php';
	include '../config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<div class="container admin">
    <div class="row">

    	<?php
        if(isset($_SESSION['idCustomer']))
        {
            echo '<h3 style="color:green;">' . htmlspecialchars($_SESSION['idCustomer']) . '</h3>';
        }else{
        	echo 'error';
        }
        ?>

        <h1 style="padding:150px;"><strong>Liste des depots</strong></h1>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>numero</th>
            <th>rue</th>
            <th>ville</th>
            <th>pays</th>
            <th>poids</th>
            <th>dimension</th>
            <th>description</th>
        </tr>
        </thead>



        <?php
        echo "<br>";

//var_dump($_SESSION['idCustomer']);

        $q = 'SELECT colis.numéro, colis.rue, colis.ville, colis.pays, colis.poids, colis.dimension, colis.description FROM colis WHERE id_Customer = ?';
        $reservation = $bdd->prepare($q);
        $reservation->execute(array($_SESSION['idCustomer']));
       	$res = $reservation->fetchAll(PDO::FETCH_ASSOC);

        //var_dump($res);

?>
		<tbody>
		<?php foreach($res as $key=>$value){
			?>
            <tr>
  
                <td><?php echo $value['numéro'];?></td>
                <td><?php echo $value['rue'];?></td>
                <td><?php echo $value['ville'];?> </td>
                <td><?php echo $value['pays'];?></td>
                <td><?php echo $value['poids'];?></td>
                <td><?php echo $value['dimension'];?></td>
                <td><?php echo $value['description'];?></td>
            </tr>
        <?php } ?>
       

        </tbody>
    </table>
</div>