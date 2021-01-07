<?php

require "../models/BDDinscriptionVendeur.php";


if(!empty($_POST)){

    // var_dump($_POST);

    inscriptionVendeur($_POST['nom'],$_POST['prenom'],$_POST['ref'],$_POST['email'],$_POST['telephone'],password_hash($_POST['password'].'nader',PASSWORD_BCRYPT),($_SESSION['societeId']));
    
   
    
}
    



include "../views/inscriptionVendeur.phtml";


?>