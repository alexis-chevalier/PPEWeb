<?php 
	include('./connexion_bdd.php');
	if (isset($_COOKIE["utilisateur"]) && isset($_COOKIE["pass"])){
		$utilisateur = $_COOKIE["utilisateur"];
		$pass = $_COOKIE["pass"];
	}
	else{
		$utilisateur=$_POST["utilisateur"];
		$pass=$_POST["pass"];
	}
	
	$bdd = new PDO('mysql:host='.$host.';dbname='.$database, $user, $password);

	//  Récupération de l'utilisateur et de son pass hashé
	$req = $bdd->prepare('SELECT utilisateur,pass FROM cr_frais_user WHERE utilisateur = :utilisateur');
	$req->execute(array(
		'utilisateur' => $utilisateur));
	$resultat = $req->fetch();

	if (!$resultat)
	{
		echo '<script>alert("Mauvais identifiant ou mot de passe !");</script>';
		echo '<script>window.location.replace("./page_connexion.php");</script>';
		exit();
	}
	else
	{
		if ($pass == $resultat['pass']) {
			session_start();
			$_SESSION['utilisateur'] = $utilisateur;
			setcookie('utilisateur', $utilisateur);
			setcookie('pass', $pass);
			echo '<script>window.location.replace("./accueil.php");</script>';
		}
		else
		{
			echo '<script>alert("Mauvais identifiant ou mot de passe !");</script>';
			echo '<script>window.location.replace("./page_connexion.php");</script>';
			exit();
		}
	}
?>