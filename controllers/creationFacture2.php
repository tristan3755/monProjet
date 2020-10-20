<?php

require "../models/BDDcreationFacture2.php";


$clients=infos($_GET['id']);

var_dump($_GET,$clients);

facture($clients['id_societes'],$_POST['datePaiement'],$_POST['commentaire'],$_POST['adresseLivraison'],$_POST['villeLivraison'],$_POST['codeLivraison'],$_POST['adresseFacturation'],$_POST['villeFacturation'],$_POST['codeFacturation'],$_POST['statut']);

include "../views/creationFacture2.phtml";




?>