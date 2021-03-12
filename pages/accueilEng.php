<?php
ini_set('display_errors', 'on');
?>

<?php
	include '../config.php';
	session_start();
 ?>

 <html>
	 <head>
	 	<title>Quickbaluchon</title>
	 	<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	 	<link rel="stylesheet" type="text/css" href="../css/style.css">
	 	<link rel="stylesheet" type="text/css" href="../css/main.css">
	 </head>

<body>
<?php
	$bdd = connexionBDD();
?>
<?php 	include '../composent/headerEng.php'; ?>

<main>
		<div class="container-fluid position1">

			<?php
			$bdd = connexionBDD();

		      	if ($_SESSION){
							 ?>
		      		<h3>Welcome on your account</h3>
		      		<div>
	<h1 style="padding-top:130px; padding-left: 600px;">Look at your package list</h1>
</div>

<?php
$host = 'localhost';
$port = '3306';
$dbname = 'quickbaluchon';
$pseudo = 'root';
$mp = 'root';
$bdd = new PDO('mysql:host='.$host.':'.$port.';dbname='.$dbname .'', ''.$pseudo.'', ''.$mp.'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$session = $_SESSION['idCustomer'];



$req = $bdd->prepare('SELECT * FROM colis WHERE id_Customer = ?');
$req->execute(array($session));
$results = $req->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <?php foreach ($results as $key => $value) { ?>


                <div class="col-md-4">
                    <div style="margin:30px; padding:50px 70px; background-color: #dddddd;">
                        <img src="<?php echo '../../img/'.$value['image'] ?>" style="height: 140px; ">
                        <p style="text-align: center">Bureau fermé</p>
                        <p style="text-align: center"><?php echo $value['numéro']. ' '.  $value['rue'] . ', ' .  $value['ville'] . ' ' .$value['pays']  ?> </p>

                        <p>
                        	<?php echo '<a style="margin-left: 75px;" href="../pagesClient/updateColi.php?id=' . $value['id'] . '" class="btn btn-primary">Modify</a>'?>
                        	<?php echo '<a style="margin-left: 75px;" href="../pagesClient/liste.php?id=' . $value['id'] . '" class="btn btn-link">List</a>'?>
                        	<?php echo '<a style="margin-left: 75px;" href="../pagesClient/DeleteColi.php?id=' . $value['id'] . '" class="btn btn-danger">Delete</a>'?>
                        </p>

                    </div>
                </div>

            <?php

        } ?>
		      	<?php }else{ ?>
				<div class="col-12 position1 margindex">
					<h2 class="this then"><u>SBJ Delivery</u></h2><br>
					<h5 class="this">Drop off your package and it'll be delivered ! <h5>
					<button type="submit" class="design bord col-2" >Discover</button>
				</div>

				<div class="row margindex">

					<div class="col-6">
						<img src="../img/fond.jfif">
					</div>
					<div class="col-6">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
				<br><br>
				<div class="row margindex">

					<div class="col-6">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
					<div class="col-6">
						<img src="../img/back1.jfif">
					</div>
					<?php } ?>
				</div>

		</div>

	</main>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>
