<?php


session_start();
if(!array_key_exists('vendeurId',$_SESSION)){
	header('location:../controllers/connexionVendeur.php');
    exit;
}



define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');


function recupFacture($idFacture){


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



    $query='SELECT * FROM facture INNER JOIN clients  ON facture.id_clients=clients.id_clients WHERE facture.id_clients=:id';
    $sth=$dbh->prepare($query);
    $sth->bindValue(':id',$idFacture, PDO::PARAM_INT);
    $sth->execute();

    $liste=$sth->fetch();

    return $liste;

}


function recupDetailFacture($idDetails){


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



    $query='SELECT id_factureDetails,quantite,prix_unitaire,TVA,nom FROM factureDetails INNER JOIN facture ON facture.id_facture=factureDetails.id_Facture WHERE facture.id_facture=:id';
    $sth=$dbh->prepare($query);
    $sth->bindValue(':id',$idDetails, PDO::PARAM_INT);
    $sth->execute();

    $objet=$sth->fetchAll();

    return $objet;

}


?>