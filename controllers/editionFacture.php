<?php

// var_dump($_GET);
include "../models/BDDeditionFacture.php";

$recupEdition=recupEdition($_GET["id"]);
$recupEditionSociete=recupEditionSociete($recupEdition[0]["id_societes"]);
$recupEditionClient=recupEditionClient($recupEdition[0]["id_clients"]);

// var_dump($recupEdition,$recupEditionSociete,$recupEditionClient);

require "../views/editionFacture.phtml";


?>