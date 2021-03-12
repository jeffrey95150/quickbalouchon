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

</body>
</html>
