<?php 
	session_start();
	include '../config.php';

	if (isset($_POST['sendFormRegister'])) { //isset verifie !!!
		$Email = htmlspecialchars($_POST['Email']);
		$password = htmlspecialchars(sha1($_POST['password']));


		//verification de la taille
		if (strlen($Email) <= 255 AND strlen($password) <= 255) {

			//verifie que l'email et le mot de passe existe donc on prepare la requête ...
			$req = $bdd->prepare('SELECT * FROM customer WHERE Email = ? AND password = ?');
			$req->execute(array($Email, $password));

			//recupere le nombre d'utilisateur ayant cet email et ce mdp(integer) 
			$customerinfo = $req->rowCount();
			if ($customerinfo == 1) {
				// recupere tout les informations lié à cet utilisateur sous forme de tableau  
				$customerinfo = $req->fetch();
				$_SESSION['idCustomer'] = $customerinfo['idCustomer'];
				$_SESSION['lastName'] = $customerinfo['lastName'];
				$_SESSION['Email'] = $customerinfo['Email'];
				$_SESSION['firstName'] = $customerinfo['firstName'];

				header("Location: ../index.php");
				} else{
				$error = "connexion impossible : vérifier vos informations";
				header("Location: ../pages/connexion.php?error=$error");
			}

		}
	}
 ?>
 