<html>
	<head>
		<title>Liste des médecins par départements</title>
	</head>
	<body>
		<h1>Liste des médecins du département <?php echo $_GET["dep"]?></h1>
		<table>
			<tr>
				<th>Numéro</th>
				<th>Code</th>
				<th>Nom </th>
				<th>Adresse </th>
				<th>Code postal </th>
				<th>Ville </th>
				<th>Coef </th>
				<th>Type </th>
			<tr>
		<?php
			include('connexion_bdd.php');
			try{
			$bdd = new PDO('mysql:host='.$host.';dbname='.$database, $user, $password);
			}
			catch(Exception $e){
				echo "Probleme: ".$e->getMessage();
			}

			$sql =  'SELECT * FROM praticien';
			foreach  ($bdd->query($sql) as $row) {
				echo "<tr>";
				echo "<td>";
				print $row['PRA_NUM'];
				echo "</td>";
				echo "<td>";
				print $row['PRA_CODE'];
				echo "</td>";
				echo "<td>";
				print $row['PRA_NOM'];
				echo "</td>";
				echo "<td>";
				print $row['PRA_ADRESSE'];
				echo "</td>";
				echo "<td>";
				print $row['PRA_CP'];
				echo "</td>";
				echo "<td>";
				print $row['PRA_VILLE'];
				echo "</td>";
				echo "<td>";
				print $row['PRA_COEFNOTORIETE'];
				echo "</td>";
				echo "<td>";
				print $row['TYP_CODE'];
				echo "</td>";
				echo "</tr>";
			}
			echo "<table>";
		?>
	</body>
</html>