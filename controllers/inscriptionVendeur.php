<?php

require "../models/BDDinscriptionVendeur.php";

//var_dump($_SESSION);


if(!empty($_POST)){

     

    inscriptionVendeur($_POST['nom'],$_POST['prenom'],$_POST['ref'],$_POST['email'],$_POST['telephone']
    ,password_hash($_POST['password'].'nader',PASSWORD_BCRYPT),($_SESSION['societeId']));
    
    header('location:../controllers/pageConnecteeSociete.php');
exit;
       
}
    
include "../views/inscriptionVendeur.phtml";


?>