<?php



session_start();
if(!array_key_exists('vendeurId',$_SESSION)){
	header('location:../controllers/connexion.php');
    exit;
}



define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');

function infos($id){

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
    

$query='SELECT * FROM clients WHERE :id=id_clients';
$sth=$dbh->prepare($query);
$sth->bindValue(':id',$id,PDO::PARAM_INT);
$sth->execute();

$clients=$sth->fetchAll();

return $clients;

};

function facture($idSoc){

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
    

$query='INSERT INTO facture (date_paiement,commentaire,adresse_livraison,adresse_facture,statut,ville_livraison,CodePostal_livraison,ville_facturation,codePostal_facturation,id_societes) VALUES :datePaiement,:comm,:adresseLivraison,:adresseFacturation';
$sth=$dbh->prepare($query);
$sth->bindValue(':id',$id,PDO::PARAM_INT);
$sth->execute();



};



?>