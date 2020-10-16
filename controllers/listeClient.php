<?php


require "../models/BDDlisteClient.php";

$listeClient=listeClient($_SESSION['societeId']);

include "../views/listeClient.phtml";



?>