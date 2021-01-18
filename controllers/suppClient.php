<?php

require "../models/BDDsuppClient.php";

suppClient($_GET['id']);
header('location:../controllers/listeClient.php');
    exit;

?>