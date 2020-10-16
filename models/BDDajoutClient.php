<?php

session_start();
if(!array_key_exists('societeId',$_SESSION)){
	header('location:../controllers/connexionSociete.php');
	exit;
}

function ajoutClient($idSoc,$nom,$prenom,$telephone,$ref,$adresse){


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


$query='INSERT INTO clients (nom,prenom,telephone,ref_client,adresse,id_societes) VALUES (:nom,:prenom,:tel,:ref,:adresse,:idSoc)';
$sth=$dbh->prepare($query);
$sth->bindValue(':idSoc',$idSoc,PDO::PARAM_INT);
$sth->bindValue(':nom',$nom,PDO::PARAM_STR);
$sth->bindValue(':prenom',$prenom,PDO::PARAM_STR);
$sth->bindValue(':tel',$telephone,PDO::PARAM_STR);
$sth->bindValue(':ref',$ref,PDO::PARAM_STR);
$sth->bindValue(':adresse',$adresse,PDO::PARAM_STR);
$sth->execute();

}


?>