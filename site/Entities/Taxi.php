<?PHP
	class Taxi{
		private $IDchauffeur;
		private $Nomchauffeur;
		private $Numchaufeur;
		private $Disponibilite;
		private $Typetaxi;
		function __construct($IDchauffeur,$Nomchauffeur,$Numchaufeur,$Disponibilite,$typetaxi){
			$this->IDchauffeur=$IDchauffeur;
			$this->Nomchauffeur=$Nomchauffeur;
			$this->Numchaufeur=$Numchaufeur;
			$this->Disponibilite=$Disponibilite;
			$this->Typetaxi=$typetaxi;
		}

		function getIDchauffeur(){
			return $this->IDchauffeur;
		}
		function getNomchauffeur(){
			return $this->Nomchauffeur;
		}
		function getNumchaufeur(){
			return $this->Numchaufeur;
		}
		function getDisponibilite(){
			return $this->Disponibilite;
		}
		function getTypetaxi(){
			return $this->Typetaxi;
		}

		function setNomchauffeur($Nomchauffeur){
			$this->Nomchauffeur=$Nomchauffeur;
		}
		function setNumchaufeur($Numchaufeur){
			$this->setNumchaufeur;
		}
		function Disponibilite($Disponibilite){
			$this->Disponibilite=$Disponibilite;
		}
		function setTypetaxi($Typetaxi){
			$this->Typetaxi=$Typetaxi;
		}

	}
?>
