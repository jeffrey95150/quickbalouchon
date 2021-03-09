<?php
        require('../config.php');

        if(isset($_POST['sendFormRegister'])){
                $lastName = htmlspecialchars($_POST['lastName']);
                $firstName = htmlspecialchars($_POST['firstName']);
                $Email = htmlspecialchars($_POST['Email']);
                $password = htmlspecialchars(sha1($_POST['password']));

                $excelfile = 'null';

                if (strlen($lastName) <= 255 AND strlen($firstName) <= 255 AND strlen($Email) <= 255 AND strlen($password) <= 255 AND strlen($excelfile) <= 255) {
                        $verifemail = $bdd->prepare('SELECT * FROM customer WHERE Email = ?');
                        $verifemail->execute(array($Email));
                        $mailexist = $verifemail->rowCount();

                        if ($mailexist == 0) {
                            
                            // creer un utilisateur et le rajoute dans la base de donnée
                            $insertuser = $bdd->prepare('INSERT INTO customer(lastName, firstName, Email, password, excelfile) VALUES(?, ?, ?, ?, ?)');
                            $insertuser->execute(array($lastName, $firstName, $Email, $password, $excelfile));
                            header('Location: ../pages/connexion.php');
                        }else{
                            $error = "cet email existe déjà";
                           header("Location: ../pages/inscription.php?error=$error");
                        }
                }
                
        }        
?>