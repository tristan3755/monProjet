<?php


 require "../models/BDDajoutProduitFacture.php";

$tabObjet=recupInfo($_GET['idSoc']);

// var_dump($_GET,$tabObjet);

include "../views/ajoutProduitFacture.phtml";



?>