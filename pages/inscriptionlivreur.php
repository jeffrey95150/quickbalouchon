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

<?php include '../composent/header.php'; ?>

<main>
 <div class="container-fluid bord position">

    <form method="POST" action="../pages_php/inscriptionlivreur.php" class="position1">
      <div class="col-9 form-row">
        <div class="col-6">
          <label for="exampleFormControlTextarea1" class="form-label">Nom</label>
          <input type="text" class="form-control" name="lastName" required="required">
        </div>
        <div class="col-6">
          <label for="exampleFormControlTextarea1" class="form-label">Prénom</label>
          <input type="text" class="form-control" name="firstName" required="required">
        </div>
      </div>
      <div class="col-9 form-row">
        <div class="col-6">
          <label for="exampleFormControlTextarea1" class="form-label">Type de voiture</label>
          <input type="text" class="form-control" name="CarType" required="required">
        </div>
        <div class="col-6">
          <label for="exampleFormControlTextarea1" class="form-label">Zone géographique</label>
          <input type="text" class="form-control" name="GeographicalZone" required="required">
        </div>
      </div>
      <div class="col-9 form-row">
        <div class="col-6">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" class="form-control" name="Email" required="required">
        </div>
        <div class="col-6">
          <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" name="password" required="required"><br>
        </div>
      </div>
         <button type="submit" class="bord design" name="sendFormRegister">Inscription</button>
      </form>

  </div>
</main>
</body>
</html>
