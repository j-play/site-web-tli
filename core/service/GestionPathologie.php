<?php

require_once(_CORE_.'beans/Pathologie.php');
require_once(_CORE_.'dao/PathologieDAO.php');
require_once(_CORE_.'util/Database.php');

/**
 * Classe service permettant d'inscrire un utlisateur
 *
 * @author Jonathan Play & Baptiste BOULAY 
 */

class GestionPathologie {
    
   /**
	* Récupère la liste des pathologies existantes (identifiant, description, etc.) sans filtres
	* @return Pathologie[] $listePatho liste de pathologies
	*/
    public static function listeAllPathologies(){
        
        $bdd = new Database();
        $daoPathologie = new PathologieDAO($bdd);

        //Renvoie de la liste de toutes les pathologies trouvées	    
        return $daoPathologie->recupererListeAll();
    }
    
    
    
}
	
?>