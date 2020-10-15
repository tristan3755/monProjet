<?php


require "../models/BDDconnexionVendeur.php";

if(!empty($_POST)){

    $user=connexion(($_POST['email']));

    if($user!==false AND password_verify($_POST['password'].'nader',$user['hashedPassword'])){


        session_start();
        $_SESSION['vendeurId']=$user['id_vendeur'];
       
        header('location:../controllers/pageConnecteeSociete.php');
        exit;

    }

}

include "../views/connexionVendeur.phtml";


?>