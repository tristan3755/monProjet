<?php

session_start();
if(!array_key_exists('societeId',$_SESSION)){
	header('location:../controllers/connexion.php');
    exit;
}


define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME','root');
define('DATABASE_PASSWORD','');





function modif($id,$quantite,$nom,$ref,$prix){

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


    $query='UPDATE stock SET quantite_stock=:stock, nom_Produit=:produit, ref=:ref, prix_unitaire=:prix WHERE id_stock = :id';
    $sth=$dbh ->prepare($query);
    $sth->bindValue(':id',$id,PDO::PARAM_INT);
    $sth->bindValue(':stock',$quantite,PDO::PARAM_STR);
    $sth->bindValue(':produit',$nom,PDO::PARAM_STR);
    $sth->bindValue(':ref',$ref,PDO::PARAM_STR);
    $sth->bindValue(':prix',$prix,PDO::PARAM_STR);
    
    $sth->execute();

}


?>