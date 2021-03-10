<!DOCTYPE html>
<html>
<head>
	<title>Quickbaluchon</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>

<br>
<br>
<br>
<br>
<br>
<br>

<h2>Modifier votre colis</h2>

<?php 
	$host = 'localhost';
	$port = '3306';
	$dbname = 'quickbaluchon';
	$pseudo = 'root';
	$mp = 'root';
	$bdd = new PDO('mysql:host='.$host.':'.$port.';dbname='.$dbname .'', ''.$pseudo.'', ''.$mp.'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
	}
	$req = $bdd->prepare('SELECT * FROM colis WHERE id = ?');
	$req->execute(array($id));
	$results = $req->fetch(PDO::FETCH_ASSOC);
?>
<div>
</div>
<form action="" method="POST" enctype="multipart/form-data" onsubmit="return test()">
                    <div class="form-group">
                        <label for="number">numero</label>
                        <input type="number" min="1" placeholder="<?=$results['numéro']; ?>"name="numéro"  id="numéro" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="text">rue</label>
                        <input type="text" name="rue" placeholder="<?=$results['rue']; ?>"id="rue" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="number">ville</label>
                        <input type="text" name="ville" placeholder="<?=$results['ville']; ?>"id="ville" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="number">Pays</label>
                        <input type="text" name="pays" placeholder="<?=$results['pays']; ?>"id="pays" class="form-control">
                    </div>

                	<div class="form-group">
						<label for="number">Poids</label>
						<input type="number" min="1"name="poids" placeholder="<?=$results['poids']; ?>" class="form-control">
					</div>

				<div class="form-group">
					<label for="nom">dimension(en m²)</label>
					<input type="number" min="50" name="dimension" placeholder="<?=$results['dimension']; ?>" class="form-control">
				</div>

				<div class="form-group">
                        <label for="textarea">description</label>
                        <input type="text" name="description" placeholder="<?=$results['description']; ?>" class="form-control">
                    </div>

				<div class="form-group">
					<label for="number">colis</label>
					<input class="image" type="file" name="colis" placeholder="<?=$results['colis']; ?>" accept="image/png, image/jpeg, image/jpg"> 

				 </div>
                    

				<button type="submit" name="modifier">Ajouter</button>
                </form>
                <?php
	echo '';

	$host = 'localhost';
	$port = '3306';
	$dbname = 'quickbaluchon';
	$pseudo = 'root';
	$mp = 'root';
	$bdd = new PDO('mysql:host='.$host.':'.$port.';dbname='.$dbname .'', ''.$pseudo.'', ''.$mp.'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$req = $bdd->prepare('SELECT * FROM colis WHERE id = ?');
	$req->execute(array($id));
	$results = $req->fetch(PDO::FETCH_ASSOC);
	echo "<br>";
?>


<?php
if(isset($_POST['modifier'])){
	print_r($_FILES);
	if (!empty($_POST['numéro'])) {
		$req = $bdd->prepare('UPDATE colis SET numéro = ? WHERE id = ?');
		$req->execute(array($_POST['numéro'], $_GET['id']));
		var_dump($req);

	}
	if (!empty($_POST['rue'])) {
		$req = $bdd->prepare('UPDATE colis SET rue = ? WHERE id = ?');
		$req->execute(array($_POST['rue'], $_GET['id']));
	}
	if (!empty($_POST['ville'])) {
		$req = $bdd->prepare('UPDATE colis SET ville = ? WHERE id = ?');
		$req->execute(array($_POST['ville'], $_GET['id']));
	}
	if (!empty($_POST['pays'])) {
		$req = $bdd->prepare('UPDATE colis SET pays = ? WHERE id = ?');
		$req->execute(array($_POST['pays'], $_GET['id']));
	}
	if (!empty($_POST['poids'])) {
		$req = $bdd->prepare('UPDATE colis SET poids = ? WHERE id
		 = ?');
		$req->execute(array($_POST['poids'], $_GET['id']));
	}
	if (!empty($_POST['dimension'])) {
		$req = $bdd->prepare('UPDATE colis SET dimension = ? WHERE id = ?');
		$req->execute(array($_POST['dimension'], $_GET['id']));
	}if (!empty($_POST['description'])) {
		$req = $bdd->prepare('UPDATE colis SET description = ? WHERE id = ?');
		$req->execute(array($_POST['description'], $_GET['id']));
	}if (!empty($_FILES['image']['name'])) {
		if (file_exists("image/" . $_FILES["image"]["name"])){
			$key = $_GET['id'];
        $_FILES["image"]["name"] = $key . $_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"], "image/" . $_FILES["image"]["name"]);
        }else {
        move_uploaded_file($_FILES["image"]["tmp_name"], "image/" . $_FILES["image"]["name"]);

		}
		$req = $bdd->prepare('UPDATE colis SET colis = ? WHERE id = ?');
		$req->execute(array($_FILES['image']['name'], $_GET['id']));
	}
	header("Location: ../pages/accueil.php");

}

	/*$req = $bdd->prepare('UPDATE local SET numero = ?, rue = ?, ville = ?, description = ?, pays = ?, dimension = ?, capacite = ?, image = ?,prix = ? WHERE id_local = ?');
	$resu = $req->execute();
*/
?>