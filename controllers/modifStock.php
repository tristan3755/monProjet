<?php

require "../models/BDDmodifStock.php";

if(!empty($_POST) && !empty($_GET)){

modif($_GET['id'],$_POST['quantite'],$_POST['nom'],$_POST['ref'],$_POST['prixUnitaire']);


}
var_dump($_GET);
var_dump($_SESSION);


include "../views/modifStock.phtml";

?>