<?php


require "../models/BDDconnexionSociete.php";

if(!empty($_POST)){

    $user=connexion(($_POST['nom']));

    if($user!==false AND password_verify($_POST['password'].'nader',$user['hashedPassword'])){


        session_start();
        $_SESSION['societeId']=$user['id_societes'];
       
        header('location:../controllers/pageConnecteeSociete.php');
        exit;

    }

}

include "../views/connexionSociete.phtml";


?>