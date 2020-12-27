<?php

var_dump($_GET);
include "../models/BDDeditionFacture.php";

$recupEdition=recupEdition($_GET["id"]);

var_dump($recupEdition);

require "../views/editionFacture.phtml";


?>