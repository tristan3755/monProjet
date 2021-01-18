<?php

include "../models/BDDmodifDetails.php";

$modifDetailsFacture=modifDetailsFacture($_GET['id']);



//var_dump($modifDetailsFacture);

require "../views/modifDetails.phtml";


?>