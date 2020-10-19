<?php

require "../models/BDDcreationFacture.php";


$infos=recupInfo($_SESSION['vendeurId']);

$infosClient=recupInfoClient($infos['id_societes']);

$infosStock=recupInfoStock($infos['id_societes']);

var_dump($infos,$infosClient,$infosStock);

include "../views/creationFacture.phtml";

?>