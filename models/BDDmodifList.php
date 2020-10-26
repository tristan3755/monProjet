<?php


session_start();
if(!array_key_exists('vendeurId',$_SESSION)){

    header('location:../controllers/connexionVendeur.php');
    exit;


}


define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME','root');
define('DATABASE_PASSWORD','');


function infoClient($idFact){


    $dbh = new PDO
(
    DATABASE_DSN,
    DATABASE_USERNAME,
    DATABASE_PASSWORD,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);


$query='SELECT * FROM facture INNER JOIN clients ON facture.id_clients=clients.id_clients where :id=facture.id_facture';
$sth=$dbh->prepare($query);
$sth->bindValue(':id',$idFact,PDO::PARAM_INT);
$sth->execute();

$client=$sth->fetch();

return $client;

}


function modifListeFacture($id,$datePaiement,$comm,$adressLiv,$villeLiv,$codeLiv,$adressFact,$villeFact,$codeFact,$statut){

    $dbh = new PDO
(
    DATABASE_DSN,
    DATABASE_USERNAME,
    DATABASE_PASSWORD,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);



$query='UPDATE facture SET date_paiement=:datePaie,commentaire=:comm,adresse_livraison=:adressLiv,adresse_facturation:adressFact
statut=:statut,ville_livraison=:villeLiv,codePostal_livraison:codeLiv,ville_facturation=:villeFact,codePostal_facturation=:codeFact WHERE :id=id_facture';


$sth=$dbh->prepare($query);
$sth->bindValue(':id',$id,PDO::PARAM_INT);
$sth->bindValue(':datePaie',$datePaiement,PDO::PARAM_STR);
$sth->bindValue(':comm',$comm,PDO::PARAM_STR);
$sth->bindValue(':adressLiv',$adressLiv,PDO::PARAM_STR);
$sth->bindValue(':villeLiv',$villeLiv,PDO::PARAM_STR);
$sth->bindValue(':codeLiv',$codeLiv,PDO::PARAM_STR);
$sth->bindValue(':adressFact',$adressFact,PDO::PARAM_STR);
$sth->bindValue(':villeFact',$villeFact,PDO::PARAM_STR);
$sth->bindValue(':codeFact',$codeFact,PDO::PARAM_STR);
$sth->bindValue(':statut',$statut,PDO::PARAM_STR);


$sth->execute();








}


?>