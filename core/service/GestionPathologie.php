<?php

require_once(_CORE_.'beans/Pathologie.php');
require_once(_CORE_.'beans/Symptome.php');
require_once(_CORE_.'beans/Meridien.php');
require_once(_CORE_.'dao/PathologieDAO.php');
require_once(_CORE_.'dao/MeridienDAO.php');
require_once(_CORE_.'util/Database.php');

/**
 * Classe service permettant d'inscrire un utlisateur
 *
 * @author Jonathan Play & Baptiste BOULAY 
 */

class GestionPathologie {
    
   /**
	* Récupère la liste des pathologies existantes (identifiant, description, etc.) avec des filtres optionnels
    * @param String|null $typePatho filtre du type de pathologie
    * @param String|null $meridien filtre du type de pathologie
    * @param String|null $caracPatho filtre du type de pathologie
    * @param String|null $motCle filtre du type de pathologie
	* @return Pathologie[] $listePatho liste de pathologies
	*/
    public static function recupererListePathologies($typePatho, $meridien, $caracPatho, $motCle){
        
        $bdd = new Database();
        $daoPathologie = new PathologieDAO($bdd);

        //Renvoie de la liste de toutes les pathologies trouvées	 
        return $daoPathologie->recupererListe($typePatho, $meridien, $caracPatho, $motCle);
    }
    
    /**
	* Récupère la liste des pathologies existantes (identifiant, description, etc.) sans filtres
	* @return Meridien[] $listeMeridiens liste de pathologies
	*/
    public static function recupererListeMeridiens(){
        
        $bdd = new Database();
        $daoMeridien = new MeridienDAO($bdd);

        //Renvoie de la liste de toutes les méridiens trouvées	    
        return $daoMeridien->recupererListe();
    }
    
    /**
	* Récupère la pathologie
    * @param idPathologie id de la pathologie
	* @return Pathologie la pathologie
	*/
    public static function recupererPathologie($idPathologie){
        
        $bdd = new Database();
        $daoPathologie = new PathologieDAO($bdd);

        //Renvoie la pathologie	    
        return $daoPathologie->recupererPatho($idPathologie);
    }
    
    /**
	* Récupère la liste des pathologie et les transforme en flux RSS
	* @return flux RSS de la liste des pathologies
	*/
    public static function creationRSSListePathologie(){
        $rss= "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<rss version=\"2.0\">\n\t<channel>\n"; // creation de l'entete du document rss
        $rss= $rss."\t\t<title>Liste des Pathologies</title>\n\t\t<description>Liste des Pathologies avec leurs symtomes</description>\n";
        $rss = $rss."\t\t<link>http://localhost:8888/patho</link>\n";
        $rss =$rss."\t\t<lastBuildDate>".date('Y-m-d H:i:s')."</lastBuildDate>\n";
        
        $listePathologie=GestionPathologie::recupererListePathologies(null, null, null, null);
        foreach ($listePathologie as $pathologie){
            $rss = $rss."\t\t<item>\n";
            $rss = $rss."\t\t\t<title>".$pathologie->_desc."</title>\n"; //ajout du nom de chaque pathologie
            $rss = $rss."\t\t\t<description> Liste des symptomes:";
            foreach ($pathologie->_listeSymptomes as $symptome){//ajout des symptomes
                $rss = $rss. $symptome->_desc;
            }
            $rss = $rss."</description>\n";
            $rss = $rss."\t\t\t<link>http://localhost:8888/patho/".$pathologie->_id."</link>\n"; //ajout du nom de chaque pathologie
            $rss = $rss."\t\t\t<category>".$pathologie->_meridien->_nom."</category>\n"; //ajout du nom de chaque pathologie
            $rss = $rss."\t\t</item>\n";
        }
        $rss=$rss."</channel>\n</rss>";// fermeture du document rss
        $fichierListePatho = fopen(_RESOURCES_.'listePathologie.xml', 'a+');// ouverture du fichier
        ftruncate($fichierListePatho,0); // on remet le fichier a vide
        fputs($fichierListePatho,$rss); 
        fclose($fichierListePatho);
    }
    
}
	
?>