<?PHP
	include "../entities/Taxi.php";
	include "../core/TaxiC.php";

	if (isset($_POST['IDchauffeur']) and isset($_POST['Nomchauffeur']) and isset($_POST['Numchaufeur']) and isset($_POST['Disponibilite']) and isset($_POST['Typetaxi'])){

		$Taxi1=new Taxi($_POST['IDchauffeur'],$_POST['Nomchauffeur'],$_POST['Numchaufeur'],$_POST['Disponibilite'],$_POST['Typetaxi']);

		$Taxi1C=new TaxiC();
		$Taxi1C->ajouterTaxi($Taxi1);
		header('Location: afficherTaxi.php');

	}
	else{
		echo "vérifier les champs";
	}
?>
