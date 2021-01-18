<?php

require "../models/BDDsuppStock.php";

suppStock($_GET['id']);

header('location:../controllers/listeStock.php');
    exit;


?>