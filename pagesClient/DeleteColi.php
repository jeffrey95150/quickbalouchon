<?php
session_start();
?>

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

<body>
<main>
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
</main>
</body>

</html>
