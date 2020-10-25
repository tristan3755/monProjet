<?php

session_start();
if(!array_key_exists('vendeurId',$_SESSION)){

    header('location:../controllers/connexionVendeur.php');
    exit;

}

define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');


function supprimerListe($idFac){

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

$query='DELETE FROM facture WHERE :id=id_facture';
$sth=$dbh->prepare($query);
$sth->bindValue(':id',$idFac,PDO::PARAM_INT);
$sth->execute();



}



?>