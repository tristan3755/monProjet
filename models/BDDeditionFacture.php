
<?php


session_start();
if(!array_key_exists('vendeurId',$_SESSION)){
    header('location:../controllers/connexion.php');
    exit;
}


define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');


function recupEdition($idFact){


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


    $query="SELECT * FROM Facture INNER JOIN facturedetails ON facturedetails.id_facture=facture.id_facture WHERE :id=facture.id_facture";
    $sth=$dbh->prepare($query);
    $sth->bindValue(':id',$idFact, PDO::PARAM_INT);
    $sth->execute();
    $recupEdition=$sth->fetchAll();

    return $recupEdition;

}



function recupEditionSociete($id){


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


    $query="SELECT nom,adresse,telephone FROM societes where :id=id_societes";
    $sth=$dbh->prepare($query);
    $sth->bindValue(':id',$id, PDO::PARAM_INT);
    $sth->execute();
    $recupEditionSociete=$sth->fetch();

    return $recupEditionSociete;

}



function recupEditionClient($id){


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


    $query="SELECT * FROM clients where :id=id_clients";
    $sth=$dbh->prepare($query);
    $sth->bindValue(':id',$id, PDO::PARAM_INT);
    $sth->execute();
    $recupEditionClient=$sth->fetch();

    return $recupEditionClient;

}



?>