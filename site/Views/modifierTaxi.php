<html>
	<head>
		<title>Modifier Taxi</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<button><a href="afficherTaxi.php">Retour à la liste des Taxi</a></button>
		<hr>
		<?PHP
			include "../entities/Taxi.php";
			include "../core/TaxiC.php";
			if (isset($_GET['IDchauffeur'])){
				$TaxiC=new TaxiC();
				$result=$TaxiC->recupererTaxi($_GET['IDchauffeur']);
				foreach($result as $row){
					$cin=$row['IDchauffeur'];
					$nom=$row['Nomchauffeur'];
					$prenom=$row['Numchaufeur'];
					$nbH=$row['Disponibilite'];
					$tarifH=$row['Typetaxi'];
		?>
		<form method="POST">
			<table>
				<caption>Modifier Taxi</caption>
				<tr>
					<td><label>	IDchauffeur</label></td>
					<td><input type="number" name="IDchauffeur" value="<?PHP echo $IDchauffeur ?>"></td>
				</tr>
				<tr>
					<td><label>	Nomchauffeur</label></td>
					<td><input type="text" name="Nomchauffeur" value="<?PHP echo $Nomchauffeur ?>"></td>
				</tr>
				<tr>
					<td><label>	Numchaufeur</label></td>
					<td><input type="number" name="Numchaufeur" value="<?PHP echo $Numchaufeur ?>"></td>
				</tr>
				<tr>
					<td><label>	Disponibilite</label></td>
					<td><input type="number" name="Disponibilite" value="<?PHP echo $nbH ?>" step="1" min = "0"></td>
				</tr>
				<tr>
					<td><label>	Typetaxi</label></td>
					<td><input type="number" name="Typetaxi" value="<?PHP echo $tarifH ?>" step="0.5" min="10" ></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="modifier" value="modifier"></td>
				</tr>

			</table>
			<input type="hidden" name="IDchauffeur_ini" value=<?PHP echo $_GET['IDchauffeur'];?>>
		</form>
		<?PHP
			}
		}
		if (isset($_POST['modifier'])){
			$Taxi=new Taxi($_POST['IDchauffeur'],$_POST['Nomchauffeur'],$_POST['Numchaufeur'],$_POST['Disponibilite'],$_POST['Typetaxi']);

			$TaxiC->modifierTaxi($Taxi, $_POST['IDchauffeur_ini']);
			header('Location: afficherTaxi.php');
		}
		?>
	</body>
</html>
