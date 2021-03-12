		<header>

			<nav class="navbar navbar-expand-lg navbar-light bg-light" >
			  <div class="container-fluid hit">
			    <div class="collapse navbar-collapse marge" id="navbarNav">
			    	<a class="navbar-brand" href="../index.php" ><img src="../img/logo.png" height="45px"></a>
			    </div>

			    <div class="collapse navbar-collapse" id="navbarNav" >
			      <ul class="navbar-nav">

			      	 <?php
				      	if (!empty($_SESSION['idCustomer'])){
									echo'
									<li class="nav-item">
										<a class="nav-link active decore" aria-current="page" href="../index.php">Accueil</a>
									</li>

				      		<li class="nav-item">
					          <a class="nav-link decore" href="../pages/accueil.php">Mon Compte</a>
					        </li>

					        <li class="nav-item">
					          <a class="nav-link decore" href="../pagesClient/DeposeColi.php">Déposer un colis</a>
					        </li>

					        <li class="nav-item">
					          <a class="nav-link decore" href="../pages_php/deconnexion.php">Se Déconnecter</a>
					        </li>';
					}else{
						echo'
			        <li class="nav-item">
			          <a class="nav-link active decore" aria-current="page" href="../index.php">Accueil</a>
			        </li>

			        <li class="nav-item">
			          <a class="nav-link decore" href="../pages/link.php">S\'inscrire</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link decore" href="../pages/connexion.php">Se Connecter</a>
			        </li>';
						}
						?>

						 <?php
	             if(!empty($_SESSION['admin'])){
								 if($_SESSION['admin'] == 1) {
									 echo
									 '<li class="nav-item dropdown">
		                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                   Administration
		                 </a>
		                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		                   <a class="dropdown-item" href="userLivreur.php">Gestion des livreurs</a>
											 <a class="dropdown-item" href="userClient.php">Gestion des clients</a>
											 <a class="dropdown-item" href="#">Gestion des paiements</a>
											 <a class="dropdown-item" href="#">Gestion des factures</a>
		                 </div>
		               </li>';
		             }
		           }
							?>

			        <li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle decor" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../img/bi_globe.png" height="20px">
					    FR
					  </a>
					  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					    <a class="dropdown-item" href="../pages/accueilEng.php">EN</a>
							<a class="dropdown-item" href="#">SPA</a>
					  </div>
					</li>
			      </ul>
			    </div>
			  </div>
			</nav>

		</header>
