<?php

require "../models/BDDcreationFacture2.php";


$clients=infos($_GET['id']);

var_dump($_GET,$clients);

include "../views/creationFacture2.phtml";




?>