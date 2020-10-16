<?php

session_start();
if(!array_key_exists('societeId',$_SESSION)){
	header('location:../controllers/connexion.php');
    exit;
}


define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME','root');
define('DATABASE_PASSWORD','');





function modif($id,$nom,$prenom,$tel,$ref,$email,){

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


    $query='UPDATE clients SET  WHERE id_clients = :id';
    $sth=$dbh ->prepare($query);
    $sth->bindValue(':nom',$nom,PDO::PARAM_STR);
    $sth->bindValue(':prenom',$prenom,PDO::PARAM_STR);
    $sth->bindValue(':ref',$ref,PDO::PARAM_STR);
    $sth->bindValue(':email',$email,PDO::PARAM_STR);
    $sth->bindValue(':telephone',$tel,PDO::PARAM_STR);
    $sth->bindValue(':hashedPassword',$password,PDO::PARAM_STR);
    $sth->bindValue(':id',$id,PDO::PARAM_INT);
    $sth->execute();

}