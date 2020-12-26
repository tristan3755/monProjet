<?php

session_start();
if(!array_key_exists('vendeurId',$_SESSION)){
    header('location:../controllers/connexionSociete.php');
	exit;
}


function modifDetails($quantite,$tva,$prix,$id){

define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');

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

$query="UPDATE facturedetails SET quantite=:quantite,prix_unitaire=:prix,TVA=:tva where id_factureDetails=:id";
$sth=$dbh->prepare($query);
$sth->bindvalue(':quantite',$quantite,PDO::PARAM_INT);
$sth->bindvalue(':prix',$prix,PDO::PARAM_INT);
$sth->bindvalue(':tva',$tva,PDO::PARAM_INT);
$sth->bindvalue(':id',$id,PDO::PARAM_INT);

$sth->execute();


}

?>