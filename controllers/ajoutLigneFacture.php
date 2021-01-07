<?php

require "../models/BDDajoutLigneFacture.php";

// var_dump($_POST,$_GET);

if(!empty($_POST)&&!empty($_GET)){

ajoutLigneFacture($_POST['nom'],$_POST['quantite'],$_POST['prix'],$_POST['tva'],$_GET['idFacture']);

};



?>