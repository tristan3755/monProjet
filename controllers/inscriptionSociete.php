<?php


include "../models/BDDinscriptionSociete.php";



if(!empty($_POST['nom']) AND !empty($_POST['adresse']) AND !empty($_POST['tel'])AND !empty($_POST['password'])){


connectSociete($_POST['nom'],$_POST['adresse'],$_POST['tel'],password_hash($_POST['password'].'nader',PASSWORD_BCRYPT));

header('location:../controllers/connexionSociete.php');
exit;

}






require "../views/inscriptionSociete.phtml";



?>