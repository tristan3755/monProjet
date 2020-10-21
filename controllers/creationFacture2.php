<?php

require "../models/BDDcreationFacture2.php";



 if(!empty($_GET)){
$client=infos($_GET['id']);
 }else{
     echo 't\'es mauvais jack'; 
 }

if(!empty($_POST)){

    if(!isset($_POST['statut']))
    {
        $_POST['statut']=false;
    }

    facture($client['id_societes'],$_POST['datePaiement'],$_POST['commentaire'],
    $_POST['adresseLivraison'],$_POST['villeLivraison'],$_POST['codeLivraison'],
    $_POST['adresseFacturation'],$_POST['villeFacturation'],$_POST['codeFacturation'],$_POST['statut']);


   
    }
    
  


var_dump($_GET,$client,$client['id_societes']);

include "../views/creationFacture2.phtml";




?>