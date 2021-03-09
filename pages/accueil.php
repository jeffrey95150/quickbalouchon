<?php 
	include '../composent/header.php';
	include '../config.php';
 ?>
 <main>
		
		<div class="container-fluid position1">
			
			<?php 

		      	if ($_SESSION) { ?>
		      		<h3>bienvenu sur votre compte</h3>
		      		<div>
	<h1 style="padding-top:130px; padding-left: 600px;">Vue de tous vos depos</h1>
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
                        	<?php echo '<a style="margin-left: 75px;" href="../pagesClient/DeleteColi.php?id=' . $value['id'] . '" class="btn btn-danger">Supprimer</a>'?>
                        </p>
                        
                    </div>
                </div>

            <?php 

        } ?>
		      	<?php }else{ ?>	
				<div class="col-12 position1 margindex">
					<h2 class="this then"><u>SBJ Delivery</u></h2><br>
					<h5 class="this">Déposes ton colis et il sera livré!!!</h5>
					<button type="submit" class="design bord col-2" >Je decouvre</button>
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