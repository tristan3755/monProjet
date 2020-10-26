<?php

session_start();
if(!array_key_exists('vendeurId',$_SESSION)){

	header('location:../controllers/connexion.php');
    exit;
};

define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');


function recupInfo($idFact){


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


$query='SELECT * FROM stock WHERE :id=id_societes';
$sth=$dbh->prepare($query);
$sth->bindValue(':id',$idFact,PDO::PARAM_INT);

$sth->execute();

$tabObjet=$sth->fetchAll();

return $tabObjet;





};









?>