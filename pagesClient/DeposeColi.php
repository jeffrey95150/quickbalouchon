<?php include '../composent/header.php'; ?>

        
	<div class="container" style="padding-left:400px; padding-top:200px; padding-bottom: 400px;">
    	<div class="col-md-6" style="background-color: #D3D3D3; padding:100px 30px; padding-left:50px; padding-right:50px;border-radius:5px;">
            <div class="row">
                <h2 style="color:black;">Déposer un colis</h2>

				<form action="DeposeColiVerif.php" method="post" enctype="multipart/form-data" onsubmit="">
                    <div class="form-group">
                        <label for="number">numero</label>
                        <input type="number" min="1"name="numéro"  id="numéro" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="text">rue</label>
                        <input type="text" name="rue" id="rue" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="number">ville</label>
                        <input type="text" name="ville" id="ville" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="number">Pays</label>
                        <input type="text" name="pays" id="pays" class="form-control">
                    </div>

                	<div class="form-group">
						<label for="number">Poids</label>
						<input type="number" min="1"name="poids" class="form-control">
					</div>
					<!--<div class="form-group">
						<label for="number">type</label>
						<select name="type" >
                        <option value="1">< 25kg</option>
                        <option value="2">< 35kg</option>
                        <option value="2">< 50kg(maximum)</option>

                    </select>
				</div>-->>

				<div class="form-group">
					<label for="nom">dimension(en cm²)</label>
					<input type="number" min="50" name="dimension" class="form-control">
				</div>

				<div class="form-group">
					<label for="number">Colis( png ou jpeg)</label>
					<input class="image" type="file" name="image" accept="image/png, image/jpeg"> 

				 </div>
                    <div class="form-group">
                        <label for="textarea">description</label>
                        <textarea type="text" name="description" class="form-control"></textarea>
                    </div>

				<button type="submit">Déposer</button>
                </form>
            </div>
        </div>
    </div>
 </body>
 </html>