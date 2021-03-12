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
<?php 	include '../composent/header.php'; ?>

    <main>
      <div class="container-fluid mainContent">
        <div class="tableDiv">
          <table class="table table-bordered table-hover table-white table-striped">
          <thead>
            <tr class="text-center">
              <th>#</th>
              <th>Nom</th>
              <th>Préom</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php
              $bdd = connexionBDD();

              $users = $bdd->query('SELECT idCustomer, lastName, firstName, Email FROM deliveryman');
              $actualIndex = 0;

              while($u = $users->fetch()){
              $actualIndex += 1;

              ?>
              <tr>
                <th>
                  <?php echo $actualIndex ?>
                </th>
                <th><?php echo ''.$u['lastName'].'';?></th>
                <th><?php echo ''.$u['firstName'].'';?></th>
                <th><?php echo ''.$u['Email'].'';?></th>
              </tr>
                }
              }
          </tbody>

    </main>
  </body>
</html>
