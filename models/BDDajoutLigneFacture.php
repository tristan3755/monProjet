<?php


session_start();
if(!array_key_exists('vendeurId',$_SESSION)){
    header('location:../controllers/connexion.php');
    exit;

};


define('DATABASE_DSN','mysql:host=localhost;dbname=monprojet;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');


function ajoutLigneFacture($nom,$quantité,$prix,$tva,$idFacture){



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


    $query="INSERT INTO facturedetails(quantite,prix_unitaire,TVA,nom,id_facture) 
    VALUES(:quantite,:prix,:tva,:id,:nom)";

    $sth=$dbh->prepare($query);
    $sth->bindValue(':nom',$nom,PDO::PARAM_STR);
    $sth->bindValue(':prix',$prix,PDO::PARAM_INT);
    $sth->bindValue(':tva',$tva,PDO::PARAM_INT);
    $sth->bindValue(':id',$idFacture,PDO::PARAM_INT);
    $sth->bindValue(':quantite',$quantité,PDO::PARAM_INT);

    $sth->execute();

}


?>