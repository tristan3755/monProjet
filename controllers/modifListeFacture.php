<?php

require "../models/BDDmodifList.php";

$client=infoClient($_GET['id']);

if(!empty($_POST)&&!empty($_GET)){

if(!empty($_POST['statut'])){

$_POST['statut']=true;

}else{

    $_POST['statut']=false;

}


modifListeFacture($_GET['id'],$_POST['datePaiement'],$_POST['commentaire'],$_POST['adresseLivraison'],$_POST['villeLivraison'],$_POST['codeLivraison'],
$_POST['adresseFacturation'],$_POST['villeFacturation'],$_POST['codeFacturation'],$_POST['statut']);

}
var_dump($client,$_POST);

include "../views/modifList.phtml";


?>