<?php
$host = 'localhost';
$port = '3306';
$dbname = 'quickbaluchon';
$pseudo = 'root';
$mp = 'root';
$bdd = new PDO('mysql:host='.$host.':'.$port.';dbname='.$dbname .'', ''.$pseudo.'', ''.$mp.'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$image =  $_FILES['image']['name'];

include '../composent/header.php';

$session = $_SESSION['idCustomer'];

var_dump($session);
foreach ($_POST as $tab=>$key) {
    $key = trim($key);
    if ($key === '') {
        header('location: ?p=location&e=' . $tab . ' est vide');
        exit();
    } else {
        if ($tab == 'prix') {
            if ($key < 10 || $key > 1000) {
                header('location: ?p=location&e=le prix  est par heure');
                exit();
            }

        }
    }
}
$x=0;
if (file_exists("../img/" . $_FILES["image"]["name"])) {


        $_FILES["image"]["name"] = $key . $_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"], "../img/" . $_FILES["image"]["name"]);
      }
      else {
        move_uploaded_file($_FILES["image"]["tmp_name"], "../img/" . $_FILES["image"]["name"]);

}
$req = $bdd->prepare('INSERT INTO colis(numéro, rue, ville, pays, poids, dimension, colis, description, id_Customer) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
$resu = $req->execute(array(
	$_POST['numéro'], $_POST['rue'], $_POST['ville'], $_POST['pays'], $_POST['poids'], $_POST['dimension'], $image,$_POST['description'], $session
));

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo $image;

header('Location: DeposeColiSuccess.php');


?>

<p style="position: center; color:lime;">Votre colis a bien été enregistré</p>