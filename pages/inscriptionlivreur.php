<?php include '../composent/header.php'; ?>

 <div class="container-fluid bord position">

    <form method="POST" action="../pages_php/inscriptionlivreur.php" class="position1">
      <div class="col-9 form-row">
        <div class="col-6">
          <label for="exampleFormControlTextarea1" class="form-label">Last Name</label>
          <input type="text" class="form-control" name="lastName">
        </div>
        <div class="col-6">
          <label for="exampleFormControlTextarea1" class="form-label">First Name</label>
          <input type="text" class="form-control" name="firstName">
        </div>
      </div>
      <div class="col-9 form-row">
        <div class="col-6">
          <label for="exampleFormControlTextarea1" class="form-label">Car Type</label>
          <input type="text" class="form-control" name="CarType">
        </div>
        <div class="col-6">
          <label for="exampleFormControlTextarea1" class="form-label">Geographical Zone</label>
          <input type="text" class="form-control" name="GeographicalZone">
        </div>
      </div>
      <div class="col-9 form-row">
        <div class="col-6">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" class="form-control" name="Email">
        </div>
        <div class="col-6">
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password"><br>
        </div>
      </div>
         <button type="submit" class="bord design" name="sendFormRegister">Sign'n</button>
      </form>

  </div>

</body>
</html>