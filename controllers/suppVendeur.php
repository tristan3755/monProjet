<?php

include "../models/BDDsuppVendeur.php";

supp($_GET['id']);

header('location:../controllers/pageConnecteeSociete.php');
exit;

// var_dump($_GET)


?>