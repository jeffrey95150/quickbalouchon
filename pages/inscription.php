<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>

<?php include"../composent/header.php";?>

 <div class="container-fluid bord position">

    <form method="POST" action="../pages_php/inscription.php" class="position1">
      <div class="col-9 form-row">
        <div class="col-6">
          <label for="exampleFormControlTextarea1" class="form-label">Nom</label>
          <input type="text" class="form-control" id="#" name="lastName" required="required">
        </div>
        <div class="col-6">
          <label for="exampleFormControlTextarea1" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="#" name="firstName" required="required">
        </div>
      </div>

      <div class="col-9 form-row">
        <div class="col-6">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" class="form-control" id="#" name="Email" required="required">
        </div>
        <div class="col-6">
          <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="#" name="password" required="required"><br>
        </div>
      </div>
         <button type="submit" class="bord design" name="sendFormRegister">Inscription</button>
      </form>

  </div>

</body>
</html>
