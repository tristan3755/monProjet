<?php

require "../models/BDDmodifCleint.php";

if(!empty($_POST) && !empty($_GET)){

modif($_GET['id'],$_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['ref'],$_POST['email'],$_POST['adresse'],$_POST['ville'],$_POST['codePostal']);


}
var_dump($_GET);
var_dump($_SESSION);


include "../views/modifClient.phtml";

?>