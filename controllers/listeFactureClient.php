<?php

require "../models/BDDlisteFactureClient.php";


$liste=recupFacture($_GET['id']);

if(!empty($liste)){
$objet=recupDetailFacture($liste['id_facture']);
}



//var_dump($_GET,$_SESSION,$liste,$objet);

include ('../views/listeFactureClient.phtml');


?>