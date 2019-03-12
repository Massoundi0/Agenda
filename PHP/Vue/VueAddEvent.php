
<?php


function VueAddEvent (){
    ?>  

	  <div id="myModal2" class="modal  container">

				<div class="modal-content" id="modal-content2">


				  <div class="modal-header">
				  
					<div class="container">
            
           <div>
             <button type="button" class="btn btn-default close2" data-dismiss="modal">Fermer</button>
           </div>
           <div>
					   <h2>Ajouter un Evenement </h2>
           </div>
					</div>
					  
				  </div>
				  <div class="modal-body">
					<div class="container">
					  <form action="." class="form-horizontal"  role="form" method="post" action="../controlleur/ajouter.php">
						  <fieldset>
							<div class="form-group">
							  <label for="titre" class="col-md-2 control-label">Titre evenement</label>
							  <div class="input-group col-md-5">
								<input class="form-control" name="titre"  type="text" value="" id="titre" required /> 
								<span class="input-group-addon">Titre</span>
				 
							  </div>
							</div>

							<div class="form-group">
							  <label for="lieu" class="col-md-2 control-label">Lieu evenement</label>
							  <div class="input-group col-md-5">
								<input class="form-control" name="lieu" type="text" value="" id="lieu" required /> 
								<span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
				 
							  </div>
							</div>
							<div class="form-group">
							  <label for="url" class="col-md-2 control-label">URL evenement</label>
							  <div class="input-group col-md-5">
								<input class="form-control" name="url"  type="text" value="" id="url"/> 
								<span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
				 
							  </div>
							</div>
							<div class="form-group">
							  <label for="description" class="col-md-2 control-label">Description evenement</label>
							  <div class="input-group col-md-5">
								<textarea class="form-control" name="description" type="textarea" value="" rows="4" id="description" required ></textarea> 
								<span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
				 
							  </div>
							</div>
							<div class="form-group">
							  <label for="debut" class="col-md-2 control-label">Debut  evenement</label>
							  <div class="input-group date form_datetime col-md-5" data-date="2019-1-1T05:25:07Z" data-date-format="dd MM yyyy - HH:ii" data-link-field="debut" required>
								<input class="form-control" name="EventStart" size="16" type="text" value=""  required readonly/>
								<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
							  </div>
							</div>
							<div class="form-group">
							  <label for="fin" class="col-md-2 control-label">Fin evenement</label>
							  <div class="input-group date form_datetime col-md-5" data-date="2019-1-1T05:25:07Z" data-date-format="dd MM yyyy - HH:ii" data-link-field="fin">
								<input class="form-control" name="EventEnd" size="16" type="text" value=""  required="required" readonly />
								<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
							  </div>
							</div>
							<div class="form-group">
							  <div class="col-md-5">
								<label for="fin" class="col-md-10 control-label"></label>
								<button type="submit" class="btn btn-default oneclick()">Valider</button>
							  </div>
							</div>
						  </fieldset>
						</form>
					  </div>
					</div>
				  <div class="modal-footer">
				  	<script src="JS/datetime/AddEvent.js"></script>
					</div>
				  </div>
				</div>
      </div>
	 


	


<?php
}

?>

