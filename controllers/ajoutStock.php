<?php


require "../models/BDDajoutStock.php";

ajoutStock($_SESSION['societeId'],$_POST['quantite'],$_POST['nom'],$_POST['ref'],$_POST['prixUnitaire']);

include "../views/ajoutStock.phtml";




?>