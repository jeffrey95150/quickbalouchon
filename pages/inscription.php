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

	<header >
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light" >
			  <div class="container-fluid hit">
			    <div class="collapse navbar-collapse marge" id="navbarNav">
			    	<a class="navbar-brand" href="#" ><img src="../img/logo.png" height="45px"></a>
			    </div>

			    <div class="collapse navbar-collapse" id="navbarNav" >
			      <ul class="navbar-nav">
			        <li class="nav-item">
			          <a class="nav-link active decore" aria-current="page" href="../index.html">Home</a>
			        </li>			
			        <li class="nav-item">
			          <a class="nav-link decore" href="connexion.php">Se Connecter</a>
			        </li>
			        <!-- <li class="nav-item">
			          <a class="nav-link" href="#"><img src="img/bi_globe.png" height="20px">Fr</a>
			        </li> -->
			        <li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle decor" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../img/bi_globe.png" height="20px">
					    Fr
					  </a>
					  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					    <li><a class="dropdown-item" href="#">anglais</a></li>
					    <li><a class="dropdown-item" href="#">Espagnol</a></li>
					    <li><a class="dropdown-item" href="#">chinois</a></li>
					  </ul>
					</li>
			      </ul>
			    </div>
			  </div>
			</nav>

		</header>

 <div class="container-fluid bord position">

    <form method="POST" action="../pages_php/inscription.php" class="position1">
      <div class="col-9 form-row">
        <div class="col-6">
          <label for="exampleFormControlTextarea1" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="#" name="lastName">
        </div>
        <div class="col-6">
          <label for="exampleFormControlTextarea1" class="form-label">First Name</label>
          <input type="text" class="form-control" id="#" name="firstName">
        </div>
      </div>
      
      <div class="col-9 form-row">
        <div class="col-6">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" class="form-control" id="#" name="Email">
        </div>
        <div class="col-6">
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input type="password" class="form-control" id="#" name="password"><br>
        </div>
      </div>
         <button type="submit" class="bord design" name="sendFormRegister">Sign'n</button>
      </form>

  </div>

</body>
</html>