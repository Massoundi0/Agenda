<?php
session_start();

            
include_once('PHP/Vue/VueAfficherCalendrier.php');
//include_once ('PHP/Vue/vueAddEvent.php');
afficherCalendrier();
if (isset($_SESSION['error'])){
              echo "<script>reafficher_formulaire(); </script>";
              echo "-------------------------------------------------";

          }



?>