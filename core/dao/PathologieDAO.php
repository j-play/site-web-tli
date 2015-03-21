<?php

/**
 * Classe DAO des pathologies
 *
 * @author BOULAY Baptiste & Jonathan PLAY
 */
class PathologieDAO {

	// Attributs
	private $_bdd;

    // Constructeur
	function __construct($bdd){
		$this->_bdd = $bdd;
	}
    
    /**
     * Retourne la liste des pathologies existantes
     * @return Pathologie[] $listePatho liste des pathologies existantes
     */
    public function recupererListeAll(){
        try{
			$stmt = $this->_bdd->prepare("SELECT * FROM patho");
			$stmt ->execute();
			$result = $stmt ->fetchAll();
            
            $listePatho = array();
            
            foreach($result as $r) {
                $patho = new Pathologie($r['idP'], $r['desc']);
                array_push($listePatho, $patho);
            }
            
            return $listePatho;
            
		}
		catch(PDOException $e){
			throw($e);
		}
    }
    
}
	
?>