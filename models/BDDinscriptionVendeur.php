<?php

session_start();
if(!array_key_exists('societeId',$_SESSION)){
	header('location:../controllers/connexionSociete.php');
	exit;
}




function inscriptionVendeur($nom,$prenom,$ref,$email,$tel,$password,$idSoc){


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


$query='INSERT INTO vendeur (nom_vendeur,prenom_vendeur,ref_vendeur,email,telephone_vendeur,hashedPassword,id_societes) VALUES (:nom,:prenom,:ref,:email,:telephone,:hashedPassword,:idSoc)';
$sth=$dbh ->prepare($query);
$sth->bindValue(':nom',$nom,PDO::PARAM_STR);
$sth->bindValue(':prenom',$prenom,PDO::PARAM_STR);
$sth->bindValue(':ref',$ref,PDO::PARAM_STR);
$sth->bindValue(':email',$email,PDO::PARAM_STR);
$sth->bindValue(':telephone',$tel,PDO::PARAM_STR);
$sth->bindValue(':hashedPassword',$password,PDO::PARAM_STR);
$sth->bindValue(':idSoc',$idSoc,PDO::PARAM_INT);

$sth->execute();


}



?>