<?php

require "../models/BDDcreationFacture2.php";



$client=infos($_GET['id']);

if(!empty($_POST)){

    facture($client['id_societes'],$_POST['datePaiement'],$_POST['commentaire'],
    $_POST['adresseLivraison'],$_POST['villeLivraison'],$_POST['codeLivraison'],
    $_POST['adresseFacturation'],$_POST['villeFacturation'],$_POST['codeFacturation'],$_POST['statut']);
    
    }
    

var_dump($_GET,$client,$client['id_societes']);

include "../views/creationFacture2.phtml";




?>