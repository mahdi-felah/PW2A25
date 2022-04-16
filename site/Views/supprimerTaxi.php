<?PHP
	include "../core/TaxiC.php";

	$TaxiC=new TaxiC();

	if (isset($_POST["IDchauffeur"])){
		$TaxiC->supprimerEmploye($_POST["IDchauffeur"]);
		header('Location: afficherTaxi.php');
	}

?>
