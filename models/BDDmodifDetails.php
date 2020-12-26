<?php


session_start();
if(!array_key_exists('vendeurId',$_SESSION)){

    header('location:../controllers/connexionVendeur.php');
    exit;


}


define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME','root');
define('DATABASE_PASSWORD','');


function modifDetailsFacture($id){


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

$query="SELECT * from factureDetails WHERE :id=id_factureDetails";
$sth=$dbh->prepare($query);
$sth->bindValue(":id",$id,PDO::PARAM_INT);

$sth->execute();

$modifDetailsFacture=$sth->fetch();


return $modifDetailsFacture;

}
?>