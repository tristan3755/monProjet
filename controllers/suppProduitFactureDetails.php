<?php

require "../models/BDDsuppDetails.php";

suppDetails($_GET['id']);

// var_dump($_GET)
header('location:../controllers/creationFacture.php');
    exit;


?>