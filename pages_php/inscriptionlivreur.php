<?php
        require('../config.php');

        if(isset($_POST['sendFormRegister'])){
                $lastName = htmlspecialchars($_POST['lastName']);
                $firstName = htmlspecialchars($_POST['firstName']);
                $CarType = htmlspecialchars($_POST['CarType']);
                $GeographicalZone = htmlspecialchars($_POST['GeographicalZone']);
                $Email = htmlspecialchars($_POST['Email']);
                $password = htmlspecialchars(sha1($_POST['password']));

                if (strlen($lastName) <= 255 AND strlen($firstName) <= 255 AND strlen($Email) <= 255 AND strlen($password) <= 255) {
                        $verifemail = $bdd->prepare('SELECT * FROM deliveryman WHERE Email = ?');
                        $verifemail->execute(array($Email));
                        $mailexist = $verifemail->rowCount();

                        if ($mailexist == 0) {
                            
                            // creer un utilisateur et le rajoute dans la base de donnée
                            $insertdeliveryman = $bdd->prepare('INSERT INTO deliveryman(lastName, firstName, CarType, GeographicalZone,Email, password) VALUES(?, ?, ?, ?, ?, ?)');
                            $insertdeliveryman->execute(array($lastName, $firstName, $CarType, $GeographicalZone,$Email, $password));
                            
                            header('Locaiton: ../pages/connexion.php');
                        }else{
                            $error = "cet email existe déjà";
                           header("Location: ../pages/inscriptionlivreur.php?error=$error");
                        }
                }
                
        }        
?>