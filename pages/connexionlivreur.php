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

<main>
<?php include '../composent/header.php'; ?>

  <div class="bord position">

    <form method="POST" action="../pages_php/connexionlivreur.php" class="position1">
      <div>
        <div class="col-12">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" class="form-control" name="Email">
        </div>
        <div class="col-12">
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password"><br>
        </div>
        <button type="submit" class="design bord col-6" style="display: flex;" name="sendFormRegister">Log'n</button>
     </div>

    </form>

  </div>
</main>
 </body>
 </html>
