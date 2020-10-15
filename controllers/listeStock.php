<?php


require "../models/BDDlisteStock.php";

$listeStock=listeStock($_SESSION['societeId']);

include "../views/listeStock.phtml";




?>