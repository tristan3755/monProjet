<?php

require "../models/BDDmodifVendeur.php";

if(!empty($_POST) && !empty($_GET)){

modif($_GET['id'],$_POST['nom'],$_POST['prenom'],$_POST['ref'],$_POST['email'],$_POST['telephone'],password_hash($_POST['password'].'nader',PASSWORD_BCRYPT));


}
var_dump($_GET);
var_dump($_SESSION);


include "../views/modifVendeur.phtml"

?>