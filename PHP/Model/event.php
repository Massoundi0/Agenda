

<?php


    include('../BD/accessBD.php');
function getEvent() // ajouter le parametre id pour pouvoir avoir des evenements par personne

    // recupere les evenement dans la bd;
{
    global $c;

    if ($c == True) {
        //echo "connecté ";
        $sql = "select * from `event` ";

        $resultat = mysqli_query($c, $sql);
        $count = mysqli_num_rows($resultat);
        $i = 0;

        $liste_event = '[';
        echo "[";
        while ($row = mysqli_fetch_assoc($resultat)) {
            $i++;
            echo '{"title": "' . $row["Title"] . '",';
            echo '"start": "' . $row["Start"] . '",';
            echo ' "end": "' . $row["End"] . '",';
            echo ' "location" : "' . $row["location"] . '",';
            echo '"description": "' . $row["description"] . '"';
            echo '}';
            if ($i == $count) {
                echo "";
            } else {
                echo ',';
            }
        }


        echo "]";

    }

}
getEvent();
?>


