<?php

/**
 * Classe DAO des méridiens
 *
 * @author BOULAY Baptiste & Jonathan PLAY
 */
class MeridienDAO{

	// Attributs
	private $_bdd;

    // Constructeur
	function __construct($bdd){
		$this->_bdd = $bdd;
	}
    
    /**
     * Retourne la liste des méridien existants
     * @return Meridien[] $listeMeridien liste des méridiens existants
     */
    public function recupererListe(){
        try{
			$stmt = $this->_bdd->prepare("SELECT * FROM meridien");
			$stmt ->execute();
			$result = $stmt ->fetchAll();
            
            $listeMeridien = array();
            
            foreach($result as $r) {
                $meridien = new Meridien($r['code'], $r['nom'], $r['element'], $r['yin']);
                array_push($listeMeridien, $meridien);
            }
            
            return $listeMeridien;
            
		}
		catch(PDOException $e){
			throw($e);
		}
    }
    
}
	
?>