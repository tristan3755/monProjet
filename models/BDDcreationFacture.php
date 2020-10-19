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

}


?>
