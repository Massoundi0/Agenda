<?php
//session_start();

function afficherCalendrier(){
?>
	<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title>ProjetS4</title>
<!-- insertion de l'API full calendar -->
<link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
<link href='CSS/calendar/fullcalendar.min.css' rel='stylesheet' />
<link href='CSS/calendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='JS/calendar/moment.min.js'></script>
<script src='JS/calendar/jquery.min.js'></script>
<script src='JS/calendar/fullcalendar.min.js'></script>
<script src='JS/calendar/theme-chooser.js'></script>


<!-- Insertion du framework bootstrap -->

<link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet' />
<script src="JS/calendar/affichercalendrier.js"></script>
    <script src='JS/calendar/locale/fr.js'></script>

    <!-- insertion de la feuille de style -->

<link rel="stylesheet" href="CSS/style-AddEvent.css"/>



</head>
<div class="container-fluid">
<!--<body>-->

  <header>
    <div id='top'>

      <div class='left'>

        <div id='theme-system-selector' class='selector' style="display: none;">
          

          <select>
            
            <option value='bootstrap3' selected >Bootstrap 3</option>
            
          </select>
        </div>

        <div data-theme-system="bootstrap3" class='selector' style='display:none'>
          Theme Name:

          <select>
            <option value='' selected>Default</option>
            <option value='cosmo'>Cosmo</option>
            <option value='cyborg'>Cyborg</option>
            <option value='darkly'>Darkly</option>
            <option value='flatly'>Flatly</option>
            <option value='journal'>Journal</option>
            <option value='lumen'>Lumen</option>
            <option value='paper'>Paper</option>
            <option value='readable'>Readable</option>
            <option value='sandstone'>Sandstone</option>
            <option value='simplex'>Simplex</option>
            <option value='slate'>Slate</option>
            <option value='spacelab'>Spacelab</option>
            <option value='superhero'>Superhero</option>
            <option value='united'>United</option>
            <option value='yeti'>Yeti</option>
          </select>
        </div>

       

       

      </div>
        <div>
            <div> langage</div>
            <div><select id='locale-selector'></select></div>

        </div>
    </div>

    <div class='right'>
      
       
    </div>
    <div class='clear'></div>
    
  </header>
  <nav>
     <h6> MENU </h6>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	Créer un groupe
	</button>
	
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	Se connecter
	</button>
	
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	Créer un compte
	</button>
  </nav>
  
  <section>
    <div class="row">
      <div class="col-sm-2 col-2 container">
        <h6>Liste des groupes </h6>
        
      </div>
      <div class="col-sm-8 col-8 container ">
      
        <h3>AGENDA</h3>
        <div id='calendar'></div>

        <!-- partie affichage des popup  -->


			  <div id="myModal2" class="modal  container">

				<div class="modal-content" id="modal-content2">


				  <div class="modal-header">
				  
					<div class="container">
            
           <div>
             <button type="button" class="btn btn-default close2" data-dismiss="modal">Fermer</button>
           </div>
           <div>
					   <h2 id="modal-titre"><?php if (isset($_SESSION['error'])) echo $_SESSION['error']['action']; ?></h2>
           </div>
					</div>
					  
				  </div>
				  <div class="modal-body">
					<div class="container">
					  <form action="PHP/controlleur/ajouter.php" class="form-horizontal"  role="form" method="post">
						  <fieldset>
							<div class="form-group">
							  <label for="titre" class="col-md-2 control-label">Titre de l'événement</label>
							  <div class="input-group col-md-5">
								<input class="form-control" name="titre"  type="text" value= "<?php if (isset($_SESSION['error'])) echo $_SESSION['error']['titre']; ?>" id="titre" placeholder="titre de l'evenement" required /> 
								<span class="input-group-addon">Titre</span>
				 
							  </div>
							</div>

              <div class="form-group">
                <label for="debut" class="col-md-2 control-label">Date de Debut </label>
                <div class="input-group col-md-5">
                <input class="form-control" name="EventStart" size="8" type="date" value= "<?php if (isset($_SESSION['error'])) echo $_SESSION['error']['EventStart']; ?>"  required="required" id="StartEv" required/>
                </div>
              </div>

              <div class="form-group">
                <label for="debutTime" class="col-md-2 control-label">Heure de debut</label>
                <div class="input-group col-md-5">
                <input class="form-control" name="EventStartTime" size="4" type="time" value= "<?php if (isset($_SESSION['error'])) echo $_SESSION['error']['EventStartTime']; ?>"  required="required" id="StartEvTime" required/>
                </div>
              </div>


              <div class="form-group">
                <label for="fin" class="col-md-2 control-label">Date de Fin</label>
                <div class="input-group date col-md-5">
                <input class="form-control" name="EventEnd" size="8" type="date" value="<?php if (isset($_SESSION['error'])) echo $_SESSION['error']['EventEnd']; ?>"  required="required" id="EndEv"/>
                </div>
              </div>

              <div class="form-group">
                <label for="finTime" class="col-md-2 control-label">Heure de fin</label>
                <div class="input-group col-md-5">
                <input class="form-control" name="EventEndTime" size="4" type="time" value= "<?php if (isset($_SESSION['error'])) echo $_SESSION['error']['EventEndTime']; ?>"  required="required" id="EndEvTime" required/>
                </div>
              </div>


							<div class="form-group">
							  <label for="lieu" class="col-md-2 control-label">Lieu de l'événement</label>
							  <div class="input-group col-md-5">
								<input class="form-control" name="lieu" type="text" value="<?php if (isset($_SESSION['error'])) echo $_SESSION['error']['lieu']; ?>" id="lieu" required placeholder="lieu de l'evenement" /> 
								<span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
				 
							  </div>
							</div>
							<div class="form-group">
							  <label for="url" class="col-md-2 control-label">URL de l'événement</label>
							  <div class="input-group col-md-5">
								<input class="form-control" name="url"  type="text" value="" id="url" placeholder="url " /> 
								<span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
				 
							  </div>
							</div>
							<div class="form-group">
							  <label for="description" class="col-md-2 control-label">Description de l'événement</label>
							  <div class="input-group col-md-5">
								<textarea class="form-control" name="description" type="textarea" 
                value ="<?php if (isset($_SESSION['error'])) echo $_SESSION['error']['description']; ?>" rows="4" id="description" required placeholder="description"><?php if (isset($_SESSION['error'])) echo $_SESSION['error']['description']; ?></textarea> 
								<span class="input-group-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
				 
							  </div>
							</div>
              
							
							<div class="form-group">
                                <input type="hidden" id="action" value= "<?php if (isset($_SESSION['error'])) echo $_SESSION['error']['action']; ?>" name="action" />
                                <div class="col-md-6">
								    <label for="fin" class="col-md-6 control-label"></label>

								    <button type="submit" class="btn btn-primary btn-block col-md-6" id="envoyer" >valider </button>
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

      <div id="myModal" class="modal col-sm-8 col-8 container">

          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <div>
                  <button type="button" class="btn btn-default close" data-dismiss="modal">Fermer</button>
                </div>
      
              <div class="container">
                
                <div>
                  <h2 id="titre-popup"></h2>
                </div>
              </div>
              <div class="container">
                <!--<span class="close">&times;</span> -->
              </div>

            </div>
            <div class="modal-body">
              <p id='debut'></p>
              <p id='fin'></p>
              <p id='lieu2'></p>
              <p id='description2'></p>
            </div>
            <div class="modal-footer">
               <button type="button" id="modifier" class="btn btn-default" data-dismiss="modal">modifier</button>
                <button type="button" id="supprimer" class="btn btn-default close" data-dismiss="modal">supprimer</button>
              
            </div>
          </div>
        </div> 


      <div class="col-sm-2 col-2 container">
             <h6>Notification</h6>
      </div>
    </div>
  </section>
  <footer>

  </footer>

</div>
</html>


<?php
}
if(isset($_SESSION['error'])){
  echo "<script>reafficher_formulaire();</script>";
  if(isset($_SESSION['error'])) {


      unset($_SESSION['error']);
  }
}



?>