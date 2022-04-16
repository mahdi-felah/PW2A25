<?PHP
	include "../config.php";
	class TaxiC {
		function afficherTaxi ($Taxi){
			echo "IDchauffeur: ".$Taxi->getIDchauffeur()."<br>";
			echo "Nomchauffeur: ".$Taxi->getNomchauffeur()."<br>";
			echo "Numchaufeur: ".$Taxi->getNumchaufeur()."<br>";
			echo "Disponibilite: ".$Taxi->getDisponibilite()."<br>";
			echo "Typetaxi: ".$Taxi->getTypetaxi()."<br>";
		}
		}
		function ajouterTaxi($Taxi){
			$sql="insert into Taxi (IDchauffeur,Nomchauffeur,Numchaufeur,Disponibilite,Typetaxi)
			values (:IDchauffeur, :Nomchauffeur,:Numchaufeur,:Disponibilite,:Typetaxi)";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);

				$IDchauffeur=$Taxi->getIDchauffeur();
				$Nomchauffeur=$Taxi->getNomchauffeur();
				$Numchaufeur=$Taxi->getNumchaufeur();
				$Disponibilite=$Taxi->getDisponibilite();
				$Typetaxi=$Taxi->getTypetaxi();
				$req->bindValue(':IDchauffeur',$IDchauffeur);
				$req->bindValue(':Nomchauffeur',$Nomchauffeur);
				$req->bindValue(':Numchaufeur',$Numchaufeur);
				$req->bindValue(':Disponibilite',$Disponibilite);
				$req->bindValue(':Typetaxi',$Typetaxi);

				$req->execute();

			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}

		}

		function afficherTaxi(){

			$sql="SElECT * From Taxi";
			$db = config::getConnexion();
			try{
				$liste=$db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function supprimerTaxi($IDchauffeur){
			$sql="DELETE FROM Taxi where IDchauffeur= :IDchauffeur";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':IDchauffeur',$IDchauffeur);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierTaxi($Taxi, $IDchauffeur){
			$sql="UPDATE Taxi SET IDchauffeur=:IDchauffeur, Nomchauffeur=:Nomchauffeur, Numchaufeur=:Numchaufeur, Disponibilite=:Disponibilite, Typetaxi=:Typetaxi WHERE IDchauffeur=:IDchauffeur";
			//$sql="UPDATE Employe SET CIN=10, Nom='Ben Salah', Prenom='Ahmed', nbHeures=20, TarifHoraire=10.5 WHERE CIN=:cin";
			var_dump($sql);

			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$IDchauffeur=$Taxi->getIDchauffeur();
				$Nomchauffeur=$Taxi->getNomchauffeur();
				$Numchaufeur=$Taxi->getNumchaufeur();
				$Disponibilite=$Taxi->getDisponibilite();
				$Typetaxi=$Taxi->getTypetaxi();



				$req->bindValue(':IDchauffeur',$IDchauffeur);

				$datas = array(':IDchauffeur'=>$IDchauffeur, ':IDchauffeur'=>$IDchauffeur, ':Nomchauffeur'=>$Nomchauffeur,':Numchaufeur'=>$Numchaufeur,':Disponibilite'=>$Disponibilite,':Typetaxi'=>$Typetaxi);
				$req->bindValue(':IDchauffeur',$IDchauffeur);

				$req->bindValue(':Nomchauffeur',$Nomchauffeur);
				$req->bindValue(':Numchaufeur',$Numchaufeur);
				$req->bindValue(':Disponibilite',$Disponibilite);
				$req->bindValue(':Typetaxi',$Typetaxi);

				var_dump($req);


				$req->execute();
				echo $req->rowCount() . " records UPDATED successfully";

			}
			catch (PDOException $e){
				echo " Erreur ! ".$e->getMessage();
				echo " Les datas : " ;
				print_r($datas);
			}
		}
		function recupererTaxi($IDchauffeur){
			$sql="SELECT * from Taxi where IDchauffeur=$IDchauffeur";
			$db = config::getConnexion();
			try{
				$liste=$db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function rechercherListeTaxi($Typetaxi){
			$sql="SELECT * from Taxi where Typetaxi=$Typetaxi";
			$db = config::getConnexion();
			try{
				$liste=$db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
	}

?>
