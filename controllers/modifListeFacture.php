<?php

require "../models/BDDmodifList.php";

$client=infoClient($_GET['id']);


modifListeFacture($_GET['id'],$_POST['datePaiement'],$_POST['commentaire'],$_POST['adresseLivraison'],$_POST['villeLivraison'],$_POST['CodeLivraison'],
$_POST['adresseFacturation'],$_POST['villeFacturation'],$_POST['codeFacturation'],$_POST['statut']);


var_dump($client);

include "../views/modifList.phtml";


?>