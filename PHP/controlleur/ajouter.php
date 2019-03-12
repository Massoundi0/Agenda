<?php
//include 'db.php';
session_start();
$error = false;

include("../Model/AddEvent.php");


?>

<?php
$titre = $_POST['titre'];
$debut_evenement = $_POST['EventStart'];
$debut_evenement_time = $_POST['EventStartTime'];
$fin_evenement = $_POST['EventEnd'];
$fin_evenement_time = $_POST['EventEndTime'];
$lieu = $_POST['lieu'];
$url = $_POST['url'];
$description = $_POST['description'];

echo $titre;
echo "<br />";
echo $debut_evenement;
echo "<br />";
echo $debut_evenement_time;
echo "<br />";
echo $fin_evenement;
echo "<br />";
echo $fin_evenement_time;
echo "<br />";
echo $lieu;
echo "<br />";
echo $url;
echo "<br />";
echo $description;
echo "<br />";
if (date_correct($debut_evenement)&& date_correct($fin_evenement)&& time_correct($debut_evenement_time)&& time_correct($fin_evenement_time)){

    $datenow = date_actuelle();
    if(plages_date($datenow,$debut_evenement)) {
        echo "<br/> l'evenement se passe aujourd'hu";
        if ($debut_evenement == $fin_evenement) {
            // test si l'evenement se passe en un jour
            echo "<br/>l'evenement se passe en un jour ";
            if (bonne_plage_horraire($debut_evenement_time, $fin_evenement_time)) {
                echo " <br/> bonne plage horraire ";
                $now = heure_actuelle();
                if ($datenow == $debut_evenement){
                    if (bonne_plage_horraire($now, $debut_evenement_time)) {
                        $start = date_heure($debut_evenement, $debut_evenement_time);
                        $end = date_heure($fin_evenement, $fin_evenement_time);
                        ajoute_bd($titre, $start, $end, $lieu, $description);
                    }
                    else{

                    }
                }
                else{
                    echo "vous ne pouvez pas mettre un evenement au passé";
                    $error = True;
                }

            } else {
                echo "mauvaise plage horraire";
                $error = true;
            }
        } else {
            if (plages_date($debut_evenement, $fin_evenement)) {
                echo "bonne definition des dates ";
            } else {
                echo "la date de debut ne peut pas être superieur la date de fin";
                $error = true;


            }

        }
    }
    else{
        echo "vous ne pouvez pas mettre un evenement a une date passé ";
        $error = True;

    }


}
else{
    echo "erreur de date <br />";
    $error = true;
}






if ($error) {
    // Dans la variable de session = tout ce que l'utlisateur à saisi
	$_SESSION["error"] = $_POST;
	header("Location: ../../");
} else {
	unset($_SESSION["error"]);
	header("Location: ../../");
}

?>