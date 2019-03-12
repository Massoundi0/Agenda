<?php
	$action = $_POST["action"];
	if($action == "ajouter"){
		echo "<script>alert('ajouter');</script>";
	}
	if($action == "modifier"){
		echo "<script>alert('modifier');</script>";
	}
	header("location:.");
?>