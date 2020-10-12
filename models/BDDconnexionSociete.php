<?php


function connexion($pseudo){

    define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet');
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
    

    $query='SELECT id_societes,hashedPassword from societes WHERE nom=:nom';
    $sth=$dbh ->prepare($query);
    $sth->bindValue(':nom',$pseudo,PDO::PARAM_STR);
    $sth->execute();
    $user=$sth->fetch();
    
    return $user;


}






?>