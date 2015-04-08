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
    public function recupererListe($typePatho, $meridien, $caracPatho, $motCle){
        try{    
            $requete = "SELECT * FROM patho "; // faire les jointures
            $where = "";
            $jointure = "";
            $filtres = array();
            if($typePatho != '' || $meridien != '' || $caracPatho != '' || $motCle != ''){
            	$where = "WHERE ";
               // $requete = $requete." WHERE ";
                $first = false;
                if($meridien  != ''){
                	$filtres[":meridien"] = $meridien ;
                    echo $meridien; 
                	$jointure = " JOIN meridien ON patho.mer = meridien.code ";
                	if($first == false){
                    	$where= $where."patho.mer = :meridien";
                    	$first = true;
                    }
                    else{
                    	$where= $where." AND mer = :meridien";
                    }
                }
                if($typePatho != ''){
                	$typePatho = $typePatho."%";
                	$filtres[":typePatho"] = $typePatho;             	
                	if($first == false){
                    	$where= $where."patho.type LIKE :typePatho";
                    	$first = true;
                    }
                    else{
                    	$where= $where." AND patho.type LIKE :typePatho";
                    }
                }
                if($caracPatho != ''){
                	$caracPatho = "%".$caracPatho;
                    echo $caracPatho; 
                	$filtres[":caracPatho"] = $caracPatho;       	
                	if($first == false){
						$where= $where."patho.type LIKE :caracPatho";
                    	$first = true;
                    }
                    else{
                    	$where= $where." AND patho.type LIKE :caracPatho";
                    }
                }
                if($motCle != ''){
                	$filtres[":motCle"] = $motCle;
                	$jointure = " JOIN symptPatho ON patho.idP = symptPatho.idP 
                	JOIN keySympt ON keySympt.idS = symptPatho.idS
                	JOIN keywords ON keywords.idK = keySympt.idK ";
                	if($first == false){
                    	$where= $where."name = :motCle";
                    }
                    else{
                    	$where= $where." AND name = :motCle";
                    }
                }
			}
             $requete = $requete.$jointure.$where;
             $stmtPatho = $this->_bdd->prepare($requete);           
             foreach ($filtres as $key => $value){
             	 $stmtPatho->bindParam($key, $value); 
             }  
			$stmtPatho->execute();
            
            // array avec les différents bindValue
                
			$result = $stmtPatho ->fetchAll();
            $listePatho = array();
            
            foreach($result as $r) { 
                
                // On récupere le meridien pour chaque pathologie
                $stmtMeridien = $this->_bdd->prepare("SELECT * FROM meridien JOIN patho ON meridien.code = patho.mer WHERE patho.idP = :idPatho ");
                $stmtMeridien->bindValue(':idPatho', $r['idP']);
                $stmtMeridien->execute();
                $resultMeridien = $stmtMeridien ->fetch(PDO::FETCH_ASSOC);
                $meridien = new Meridien($resultMeridien['code'], $resultMeridien['nom'], $resultMeridien['element'], $resultMeridien['yin']);
                
                // On récupere les symptomes pour chaque pathologie 
                $stmtSymptome = $this->_bdd->prepare("SELECT * FROM symptome JOIN symptPatho ON symptome.idS = symptPatho.idS WHERE symptPatho.idP = :idPatho ");
                $stmtSymptome->bindValue(':idPatho', $r['idP']);
                $stmtSymptome->execute();
                $resultSymptome = $stmtSymptome->fetchAll();
                $listeSymptome = array();
                foreach($resultSymptome as $row) {
                    $symptome = new Symptome($row['idS'], $row['desc']);
                    array_push($listeSymptome, $symptome);
                }
                $patho = new Pathologie($r['idP'], $r['desc'], $r['type'],$meridien,$listeSymptome);
                array_push($listePatho, $patho);
            }
            return $listePatho;
            
		}
		catch(PDOException $e){
			throw($e);
		}
    }
    
    /**
     * Retourne une pathologie existante
     * @param $idPatho id de la pathologie à sélectionner
     * @return Pathologie $patho la pathologie selectionnée
     */
    public function recupererPatho($idPatho){
        try{
			$stmt = $this->_bdd->prepare("SELECT * FROM patho WHERE idP = :idPatho");
            $stmt->bindValue(':idPatho', $idPatho);
			$stmt ->execute();
			$result = $stmt ->fetch(PDO::FETCH_ASSOC);
            
            // On récupere le meridien pour chaque pathologie
            $stmtMeridien = $this->_bdd->prepare("SELECT * FROM meridien JOIN patho ON meridien.code = patho.mer WHERE patho.idP = :idPatho ");
            $stmtMeridien->bindValue(':idPatho', $result['idP']);
            $stmtMeridien->execute();
            $resultMeridien = $stmtMeridien ->fetch(PDO::FETCH_ASSOC);
            $meridien = new Meridien($resultMeridien['code'], $resultMeridien['nom'], $resultMeridien['element'], $resultMeridien['yin']);
            
            // On récupere les symptomes pour la pathologie
            $stmtSymptome = $this->_bdd->prepare("SELECT * FROM symptome JOIN symptPatho ON symptome.idS = symptPatho.idS WHERE symptPatho.idP = :idPatho ");
            $stmtSymptome->bindValue(':idPatho', $result['idP']);
            $stmtSymptome->execute();
            $resultSymptome = $stmtSymptome->fetchAll();
            $listeSymptome = array();
            foreach($resultSymptome as $row) {
                $symptome = new Symptome($row['idS'], $row['desc']);
                array_push($listeSymptome, $symptome);
            }
            $patho = new Pathologie($result['idP'], $result['desc'], $result['type'],$meridien,$listeSymptome);           
            return $patho;
            
		}
		catch(PDOException $e){
			throw($e);
		}
    }
}
	
?>