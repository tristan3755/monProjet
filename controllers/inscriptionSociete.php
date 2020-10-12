<?php


include "../models/BDDinscriptionSociete.php";



if(!empty($_POST)){


connectSociete($_POST['nom'],$_POST['adresse'],$_POST['tel'],password_hash($_POST['password'].'nader',PASSWORD_BCRYPT));

header('location:../controllers/pageConnecteeSociete.php');
exit;

}




require "../views/inscriptionSociete.phtml";



?>