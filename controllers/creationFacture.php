<?php

require "../models/BDDcreationFacture.php";


$infos=recupInfo($_SESSION['vendeurId']);

var_dump($infos);

include "../views/creationFacture.phtml";

?>