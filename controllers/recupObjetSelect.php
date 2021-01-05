<?php

include "../models/BBDrecupObjetSelect.php";

// var_dump($_GET);


if(!empty($_GET)){

    $recupObjetSelect=recupObjetSelect($_GET['idObjet']);
    
}


// var_dump($recupObjetSelect);


require "../views/recupObjetSelect.phtml"

?>