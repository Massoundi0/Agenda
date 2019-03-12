<?php

//-------------------------------- traitement de la date -------------------------------- 
function date_correct ($chaine){
    // verifie si la date est du style AAAA-MM-JJ
    if (preg_match("/[0-9]{4}\-[0-9]{2}\-[0-9]{2}/",$chaine)){
        return 1;}
    else{
        return 0;
        }
    }
    //----------------------------traitement du temps ------------------------------------
function time_correct($chaine){
    // verifie si le temps est du type HH:mm
    if (preg_match("/[0-9]{2}:[0-9]{2}/",$chaine)){
        return 1;}
    else{
        return 0;
    }
}

function bonne_plage_horraire($debut,$fin){
    // entree : debut,fin: HH:mm
    $temps_debut = enlever_caractere_unitile($debut);
    $temps_fin = enlever_caractere_unitile($fin);

    return (int)$temps_debut <(int)$temps_fin;

}


function enlever_caractere_unitile($chaine){
	$res = str_replace(':','',$chaine);
	$res = str_replace("-", "", $res);
	$res = str_replace(' ','',$res);
	
	return $res;
}


function heure_actuelle(){
    date_default_timezone_set("Europe/Berlin");
    $time = new DateTime();
    $time = $time->format('H:i');
    return $time;


}

function date_actuelle(){
    date_default_timezone_set("Europe/Berlin");
    $date = new DateTime();
    $date = $date->format('Y-m-d');
    return $date;


}

function date_heure($date,$heure){
    return $date."T".$heure;

}

function ajoute_bd($titre,$start,$end,$lieu,$description){
    global $c;

    if ($c == True) {
        $sql = "insert into `event`(Title, Start, End, location, description) values($titre, $start,$end, $lieu, $description)";
        mysqli_query($c,$sql);

    }

}




// -------------------------------------- traitement de la plage horraire ---------------

function date_to_nombre($date){
$nombre = enlever_caractere_unitile($date);
$nombre = $nombre."00";
$nombre = change_date($nombre);
return $nombre;
}
 // test de transformation de la date en nombre

//echo date_to_nombre("03 Fevrier 2019 18:25");
//echo "<br />";
//echo date_to_nombre("03 01 2019 18:25");
//echo "<br />";
// test si le debut de l'evenement est correcte







function plages_date($debut,$fin){
    // test si la date de debut n'est pas apres la date de fin
    $date_debut = enlever_caractere_unitile($debut);
    $date_fin = enlever_caractere_unitile($fin);

    return (int)$date_debut <= $date_fin;

}

//function bonnes_dates($debut,$fin){

//	return (int)$debut < (int)$fin;
//}





?>