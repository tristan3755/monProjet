<?php



	session_start();
    unset($_SESSION['societeId']);
    
    var_dump($_SESSION);
    
	
  




header('location:./index.php');

exit;






?>