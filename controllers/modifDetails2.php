<?php

include "../models/BDDmodifDetails2.php";

var_dump($_POST,$_SESSION,$_GET);

modifDetails($_POST['quantite'],$_POST['tva'],$_POST['prixUnitaire'],$_GET['id']);



?>