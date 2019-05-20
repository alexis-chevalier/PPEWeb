<html>
	<head>
		<title>Liste des département</title>
	</head>
	<body>
		<h1>Liste des départements:</h1>
		<table>
			<tr>
				<th>Code</th>
				<th>Chef</th>
				<th>Nom </th>
			<tr>
		<?php
			include('connexion_bdd.php');
	
			$bdd = new PDO('mysql:host='.$host.';dbname='.$database, $user, $password);

			$sql =  'SELECT * FROM departement';
			foreach  ($bdd->query($sql) as $row) {
				echo "<tr>";
				echo "<td>";
				print $row['DEP_CODE'] . "\t";
				echo "</td>";
				echo "<td>";
				//print  $row['DEP_CHEFVENTE'] . "\t";
				if (!$row['DEP_CHEFVENTE']){
					echo "Aucun";
				}
				echo "</td>";
				echo "<td>";
				print $row['DEP_NOM'] . "\n";
				echo "</td>";
				echo "</tr>";
			}
			echo "<table>";
		?>
	</body>
</html>