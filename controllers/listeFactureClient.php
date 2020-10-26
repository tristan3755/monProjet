<?php

require "../models/BDDlisteFactureClient.php";


$liste=recupFacture($_GET['id']);




var_dump($_GET,$_SESSION,$liste);

include ('../views/listeFactureClient.phtml');


?>