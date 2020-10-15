<?php


require "../models/BDDajoutStock.php";

if(!empty($_POST)){

ajoutStock($_SESSION['societeId'],$_POST['quantite'],$_POST['nom'],$_POST['ref'],$_POST['prixUnitaire']);

};


var_dump($_POST,$_SESSION);

include "../views/ajoutStock.phtml";




?>