

<?php

$mysql_host = "localhost";
$mysql_login = "root";
$mysql_password = "";
$bd_name ="massoundi";
$c = mysqli_connect($mysql_host, $mysql_login,$mysql_password, $bd_name);
mysqli_set_charset($c, "utf8");

if ($c == True){
    //echo "connecté ";
    $sql = "select * from `event` ";

    $resultat = mysqli_query($c,$sql);
    $count=mysqli_num_rows($resultat);
    $i = 0;

    $liste_event = '[';
    echo "[";
    while($row = mysqli_fetch_assoc($resultat)){
        $i++;
        echo '{"title": "'.$row["Title"].'",';
        echo '"start": "'.$row["Start"].'",';
        echo ' "end": "'.$row["End"].'",';
        echo ' "location" : "'.$row["location"].'",';
        echo '"description": "'.$row["description"].'"';
        echo '}';
        if($i == $count){
            echo "";
        }
        else{
            echo ',';
        }
    }


    echo "]";
}

?>


