<?php
echo '<meta http-equiv="refresh" content="3;url=./page_connexion.php"/>';
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

$_SESSION = array();
session_destroy();
setcookie("utlisateur", "", 1);
setcookie("pass", "", 1);
echo "Déconnecter !<br>";
echo "Redirection vers la <a href='./page_connexion.php'>page de connexion</a> !";
?>