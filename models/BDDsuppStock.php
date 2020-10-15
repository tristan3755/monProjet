<?php



session_start();
if(!array_key_exists('societeId',$_SESSION)){
	header('location:../controllers/connexion.php');
    exit;
}


define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');





function suppStock($id){

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


    $query='DELETE FROM stock WHERE id_stock = :id';
    $sth=$dbh ->prepare($query);
    $sth->bindValue(':id',$id,PDO::PARAM_STR);
    $sth->execute();




}

?>