<html>
	<head>
		<title>Connexion</title>
		<script type="text/javascript" src="js/connexion.js"></script>
		<link rel="stylesheet" href="css/general.css">
		<meta charset="UTF-8">
	</head>
	<body>
		<form name="formulaire" action="connexion.php" method="POST">
		<h1> Connexion </h1>
		<label for="utilisateur">Mail</label><br>
		<input type="text" id="utilisateur" name="utilisateur"></input>
		<br><br>
		<label for="pass">Mot de passe</label><br>
		<input type="password" id="pass" name="pass"></input>
		<br><br>
		<input type="button" value="Se connecter" onclick="controller()"></button>
		</form>
	</body>
</html>