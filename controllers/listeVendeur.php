<?php



require "../models/BDDlisteVendeur.php";

$listeVendeur=vendeurs($_SESSION['societeId']);
// var_dump($listeVendeur);



include "../views/listeVendeur.phtml";



?>