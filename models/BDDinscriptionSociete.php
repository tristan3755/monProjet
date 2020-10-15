<?php


function connectSociete(string $nom,$adresse,$tel,$password){

	define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
	define('DATABASE_USERNAME','root');
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
$query='INSERT INTO societes(nom,adresse,telephone,hashedPassword) VALUES (:nom,:adresse,:tel,:hashedPassword)';
$sth=$dbh ->prepare($query);
$sth->bindValue(':nom',$nom,PDO::PARAM_STR);
$sth->bindValue(':adresse',$adresse,PDO::PARAM_STR);
$sth->bindValue(':tel',$tel,PDO::PARAM_STR);
$sth->bindValue(':hashedPassword',$password,PDO::PARAM_STR);
$sth->execute();

};

?>