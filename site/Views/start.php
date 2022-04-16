<?PHP
    include "../entities/Taxi.php";
    include "../core/TaxiC.php";
    $Taxi=new Taxi(75757575,'Mahdi Felah',20200300,0,2);
    $TaxiC=new TaxiC();
    $TaxiC->afficherTaxi($Taxi);
    echo "****************";
    echo "<br>";
    echo "IDchauffeur:".$Taxi->getIDchauffeur();
    echo "<br>";
    echo "Nomchauffeur:".$Taxi->getNomchauffeur();
    echo "<br>";
    echo "Numchaufeur:".$Taxi->getNumchaufeur();
    echo "<br>";
    echo "Disponibilite:".$Taxi->getDisponibilite();
    echo "<br>";
    echo "Typetaxi:".$Taxi->getTypetaxi();
    echo "<br>";


?>
