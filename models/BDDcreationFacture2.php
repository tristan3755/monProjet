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

$client=$sth->fetch();

return $client;

};

function facture($idSoc,$datePaiement,$commentaire,$adresseLivraison,$villeLivraison,$codeLivraison,$adresseFacturation,$VilleFacturation,$codeFacturation,$statut,$idClient){

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
    

$query='INSERT INTO facture(date_paiement,commentaire,adresse_livraison,adresse_facturation,statut,ville_livraison,CodePostal_livraison,ville_facturation,codePostal_facturation,id_societes,id_clients) 
VALUES (:datePaiement,:comm,:adresseLivraison,:adresseFacturation,:statut,:villeLivraison,:codeLivraison,:villeFacturation,:codeFacturation,:idSoc,:idClient)';
$sth=$dbh->prepare($query);
$sth->bindValue(':idSoc',$idSoc,PDO::PARAM_INT);
$sth->bindValue(':datePaiement',$datePaiement,PDO::PARAM_STR);
$sth->bindValue(':comm',$commentaire,PDO::PARAM_STR);
$sth->bindValue(':adresseLivraison',$adresseLivraison,PDO::PARAM_STR);
$sth->bindValue(':adresseFacturation',$adresseFacturation,PDO::PARAM_STR);
$sth->bindValue(':statut',$statut,PDO::PARAM_BOOL);
$sth->bindValue(':villeLivraison',$villeLivraison,PDO::PARAM_STR);
$sth->bindValue(':codeLivraison',$codeLivraison,PDO::PARAM_STR);
$sth->bindValue(':villeFacturation',$VilleFacturation,PDO::PARAM_STR);
$sth->bindValue(':codeFacturation',$codeFacturation,PDO::PARAM_INT);
$sth->bindValue(':idClient',$idClient,PDO::PARAM_INT);

$sth->execute();

};



?>