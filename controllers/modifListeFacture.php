<?php

require "../models/BDDmodifList.php";

$client=infoClient($_GET['id']);

var_dump($client);

include "../views/modifList.phtml";


?>