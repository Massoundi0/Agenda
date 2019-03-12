<?php
session_start();
$error = false;
    include("../Model/AddEvent.php");

    $action = $_POST["action"];
    $titre = $_POST["titre"];
    $lieu = $_POST["lieu"];
    $StartEv = $_POST["EventStart"];
    $StartEvTime = $_POST["StartEvTime"];
    $EndEvTime = $_POST["EndEvTime"];
    $EndEv = $_POST["EventEnd"];

    echo $StartEv;
    echo $StartEvTime;

    $StartEv = date_to_nombre($StartEv);
    if (bon_debut($StartEv)) {
        echo "<script>alert(bon debut )</script>";
    } else {
        echo "<script>alert( mauvais debut )</script>";
    }

    if (bonne_plage_horaire($StartEv, $EndEv)) {
        echo "<script>alert(bonne plage horaire)</script>";
    } else {
        echo "<script>alert('mauvais plage horaire')</script>";
    }

    if ($action == "ajouter") {
        echo "<script>alert('ajouter');</script>";
    }
    if ($action == "modifier") {
        echo "<script>alert('modifier');</script>";
    }


		//else{

		//	$error = true;
		//}
	//}
	//else{
		//$error = true;
	//	echo "<script>alert('Mauvaise plage horaire ')</script>";
	//}

	
		//$StartEv.format('YYYYMMDDHHMM');
		
	
	//header("location:.");

//if ($error) {
	// Dans la variable de session = tout ce que l'utlisateur à saisi
//	$_SESSION["error"] = $_POST;
//	header("Location: ../../");
//} else {
//	unset($_SESSION["error"]);
//	header("Location: ../../");
//}

?>