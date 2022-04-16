<?PHP
include "../core/TaxiC.php";

$Taxi1C=new TaxiC();
$listeTaxi=$Taxi1C->afficherTaxi();

?>

<html>
	<head>
		<title>Afficher Liste Taxi</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" href="style.css">
    </head>
    <body>
		<button><a href="ajoutTaxi.html">Ajouter un Taxi</a></button>
		<hr>
		<table>
			<tr>
				<th>IDchauffeur</th>
				<th>Nomchauffeur</th>
				<th>Numchaufeur</th>
				<th>Disponibilite</th>
				<th>Typetaxi</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listeTaxi as $row){
			?>
				<tr>
					<td><?PHP echo $row['IDchauffeur']; ?></td>
					<td><?PHP echo $row['Nomchauffeur']; ?></td>
					<td><?PHP echo $row['Numchaufeur']; ?></td>
					<td><?PHP echo $row['Disponibilite']; ?></td>
					<td><?PHP echo $row['Typetaxi']; ?></td>
					<td>
						<form method="POST" action="supprimerEmploye.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $row['IDchauffeur']; ?> name="IDchauffeur">
						</form>
					</td>
					<td>
						<a href="modifierTaxi.php?cin='<?PHP echo $row['IDchauffeur']; ?>'"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
