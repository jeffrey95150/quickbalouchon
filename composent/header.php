<?php session_start(); ?>
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
<body>

	<div>
		
		<header >
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light" >
			  <div class="container-fluid hit">
			    <div class="collapse navbar-collapse marge" id="navbarNav">
			    	<a class="navbar-brand" href="../index.php" ><img src="../img/logo.png" height="45px"></a>
			    </div>

			    <div class="collapse navbar-collapse" id="navbarNav" >
			      <ul class="navbar-nav">

			      	 <?php 
				      	if ($_SESSION) { ?>

				      		<li class="nav-item">
					          <a class="nav-link decore" href="#">Mon Compte</a>
					        </li>

					        <li class="nav-item">
					          <a class="nav-link decore" href="../pagesClient/DeposeColi.php">Déposer un colis</a>
					        </li>

					        <li class="nav-item">
					          <a class="nav-link decore" href="../pages_php/deconnexion.php">Se Déconnecter</a>
					        </li>
					<?php }else{ ?>        
			        <li class="nav-item">
			          <a class="nav-link active decore" aria-current="page" href="../index.php">Home</a>
			        </li>

			        <li class="nav-item">
			          <a class="nav-link decore" href="../pages/link.php">S'inscrire</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link decore" href="../pages/link1.php">Se Connecter</a>
			        </li>
			        <?php } ?>
			        <!-- <li class="nav-item">
			          <a class="nav-link" href="#"><img src="img/bi_globe.png" height="20px">Fr</a>
			        </li> -->
			        <li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle decor" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../img/bi_globe.png" height="20px">
					    Fr
					  </a>
					  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					    <li><a class="dropdown-item" href="#">anglais</a></li>
					    <li><a class="dropdown-item" href="#">Espagnol</a></li>
					    <li><a class="dropdown-item" href="#">chinois</a></li>
					  </ul>
					</li>
			      </ul>
			    </div>
			  </div>
			</nav>

		</header>
	</div>	