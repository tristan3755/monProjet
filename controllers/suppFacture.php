<?php

require "../models/BDDsuppFacture.php";


// var_dump($_GET);

supprimerListe($_GET['id']);

header('location:../controllers/creationFacture.php');
    exit;


?>