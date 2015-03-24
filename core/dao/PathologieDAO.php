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
    public function recupererListe(){
        try{
			$stmt = $this->_bdd->prepare("SELECT * FROM patho");
			$stmt ->execute();
			$result = $stmt ->fetchAll();
            
            $listePatho = array();
            
            foreach($result as $r) {
                $stmtSymptome = $this->_bdd->prepare("SELECT * FROM symptome JOIN symptPatho ON symptome.idS = symptPatho.idS WHERE symptPatho.idP = :idPatho ");
                $stmtSymptome->bindValue(':idPatho', $r['idP']);
                $stmtSymptome->execute();
                $resultSymptome = $stmtSymptome->fetchAll();
                $listeSymptome = array();
                foreach($resultSymptome as $row) {
                    $symptome = new Symptome($row['idS'], $row['desc']);
                    array_push($listeSymptome, $symptome);
                }
                $patho = new Pathologie($r['idP'], $r['desc'], $r['type'],$r['mer'],$listeSymptome);
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