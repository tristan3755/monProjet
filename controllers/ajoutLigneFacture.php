<?php

var_dump($_POST,$_GET);

if(!empty($_POST)){

    ajoutLigneFacture($_POST['nom'],$_POST['quantité'],$_POST['prix'],$_POST['tva'],$_GET['idFacture']);

};

include "../models/BDDajoutLigneFacture";

?>