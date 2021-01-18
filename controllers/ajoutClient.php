<?php

require "../models/BDDajoutClient.php";

if(!empty($_POST)){

 ajoutClient($_SESSION['societeId'],$_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['ref'],$_POST['email'],$_POST['adresse'],$_POST['ville'],$_POST['codePostal'],);

 header('location:../controllers/listeClient.php');
    exit;

}
// var_dump($_SESSION,$_POST);

include "../views/ajoutClient.phtml"

?>