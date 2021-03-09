<?php 
	session_start();
	include '../config.php';

	if (isset($_POST['sendFormRegister'])) { //isset verifie !!!
		$Email = htmlspecialchars($_POST['Email']);
		$password = htmlspecialchars(sha1($_POST['password']));


		//verification de la taille
		if (strlen($Email) <= 255 AND strlen($password) <= 255) {

			//verifie que l'email et le mot de passe existe donc on prepare la requête ...
			$req = $bdd->prepare('SELECT * FROM deliveryman WHERE Email = ? AND password = ?');
			$req->execute(array($Email, $password));

			//recupere le nombre d'utilisateur ayant cet email et ce mdp(integer) 
			$deliverymaninfo = $req->rowCount();
			if ($deliverymaninfo == 1) {
				// recupere tout les informations lié à cet utilisateur sous forme de tableau  
				$deliverymaninfo = $req->fetch();
				$_SESSION['idDeliveryMan'] = $deliverymaninfo['idDeliveryMan'];
				$_SESSION['lastName'] = $deliverymaninfo['lastName'];
				$_SESSION['Email'] = $deliverymaninfo['Email'];
				$_SESSION['firstName'] = $deliverymaninfo['firstName'];

				header("Location: ../index.php");
				} else{
				$error = "connexion impossible : vérifier vos informations";
				header("Location: ../pages/connexionlivreur.php?error=$error");
			}

		}
	}
 ?>
 