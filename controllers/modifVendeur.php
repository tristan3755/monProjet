<?php

require "../models/BDDmodifVendeur.php";

if(!empty($_POST) && !empty($_GET)){


    if(empty($_POST['password'])){

        modifSansPassword($_GET['id'],$_POST['nom'],$_POST['prenom'],$_POST['ref'],$_POST['email'],$_POST['telephone']);
    
    }else{
        modif($_GET['id'],$_POST['nom'],$_POST['prenom'],$_POST['ref'],$_POST['email'],$_POST['telephone'],password_hash($_POST['password'].'nader',PASSWORD_BCRYPT));

    }


} 

$placeHolder=holder($_GET['id']);

// var_dump($_GET);
// var_dump($_SESSION);
// var_dump($placeHolder);

include "../views/modifVendeur.phtml"

?>