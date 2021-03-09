<?php 
	include '../composent/header.php';
	include '../config.php';
 ?>

<div class="container admin">
    <div class="row">


        <?php
        $host = 'localhost';
		$port = '3306';
		$dbname = 'quickbaluchon';
		$pseudo = 'root';
		$mp = 'root';
		$bdd = new PDO('mysql:host='.$host.':'.$port.';dbname='.$dbname .'', ''.$pseudo.'', ''.$mp.'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		if(!empty($_GET['id']))
        {
            $id = $_GET['id'];
        }

        if(!empty($_POST))
        {
            $id = $_POST['colis'];

            $q = 'DELETE FROM colis WHERE id = ?';
            //print_r($q);
            //var_dump($id);
            $req = $bdd->prepare($q);
            $req->execute(array($id));
            header("Location: ../pages/accueil.php");
        }
        ?>


        <form class="form" role="form" action="DeleteColi.php" method="POST" style="padding-left: 400px;">
            
            <br>
            <br><br><br><br><br>
            <p class="alert alert-warning">Etes vous sûr de vouloir supprimer ?</p>
            <div class="form-action">
                <button type="submit" class="btn btn-warning" name = "colis" value="<?php echo $id;?>"> oui </button>
                <a href="../pages/accueil.php" class="btn btn-default"> non </a>
            </div>
        </form>
    </div>

</div>