<?php
include_once('../BD/accessBD.php');
?>

<!doctype html>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="container">

		<form  class="form-signin" method='post' action='controlleur/actions.php'>
			<h2 class="form-signin-heading">Inscription</h2>

				<p>
				<input type='text' class="form-control" id='nom' placeholder="Nom" name='nom'/>
				</p>

				<p>				
				<input type='text' class="form-control"  id='prenom' placeholder="Prenom" name='prenom'/>
				</p>

				<p>		
				<input type='text' class="form-control"  id='login' placeholder="Login" name='login'/>
				</p>

				<p>
				<input type='password'  class="form-control" id='mdp' placeholder="Mot de pass" name='mdp'/>
				</p>

				<p>				
				<input type='date' class="form-control"  id='ddn' placeholder="Date de naissance" name='ddn'/>
				</p>

				<p>
				<input type='email' class="form-control" id='email' placeholder="Email"  name='email'/>
				</p>

				<p><input type='submit' class="btn btn-primary"  name='action' value='Inscription'></p>
		<form/>

</body>

</html>
