<?php

session_start();
if(!array_key_exists('societeId',$_SESSION)){
	header('location:../controllers/connexionSociete.php');
	exit;
}

function ajoutStock($idSoc,$quantite,$nom,$ref,$prixUnitaire){


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


$query='INSERT INTO stock (quantite_stock,nom_Produit,ref,prix_unitaire,id_societes)  VALUES (:quantite,:nom,:ref,:prix,:idSoc)';
$sth=$dbh ->prepare($query);
$sth->bindValue(':idSoc',$idSoc,PDO::PARAM_INT);
$sth->bindValue(':quantite',$quantite,PDO::PARAM_STR);
$sth->bindValue(':nom',$nom,PDO::PARAM_STR);
$sth->bindValue(':ref',$ref,PDO::PARAM_STR);
$sth->bindValue(':prix',$prixUnitaire,PDO::PARAM_STR);
$sth->execute();


}



?>

