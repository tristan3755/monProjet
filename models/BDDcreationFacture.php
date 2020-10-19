<?php



session_start();
if(!array_key_exists('vendeurId',$_SESSION)){
	header('location:../controllers/connexion.php');
    exit;
}



define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');

function recupInfo($id){

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
    

$query='SELECT * FROM vendeur INNER JOIN societes ON vendeur.id_societes=societes.id_societes  WHERE :id=id_vendeur';
$sth=$dbh->prepare($query);
$sth->bindValue(':id',$id,PDO::PARAM_INT);
$sth->execute();

$infos=$sth->fetch();

return $infos;

};


function recupInfoClient($idSoc){

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
    

$query='SELECT * FROM societes INNER JOIN clients ON societes.id_societes=clients.id_societes  WHERE :id=societes.id_societes';
$sth=$dbh->prepare($query);
$sth->bindValue(':id',$idSoc,PDO::PARAM_INT);
$sth->execute();

$infosClient=$sth->fetchALL();

return $infosClient;

}

function recupInfoStock($idSoc){

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
    

$query='SELECT * FROM societes INNER JOIN stock ON societes.id_societes=stock.id_societes  WHERE :id=stock.id_societes';
$sth=$dbh->prepare($query);
$sth->bindValue(':id',$idSoc,PDO::PARAM_INT);
$sth->execute();

$infosStock=$sth->fetchALL();

return $infosStock;

}


?>
