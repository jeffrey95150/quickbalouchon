<?php include '../composent/header.php'; ?>

  <div class="bord position">
    
    <form method="POST" action="../pages_php/connexion.php" class="position1">
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

 </body>
 </html>
 