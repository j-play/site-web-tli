<?php
class UtilisateurDAO {
	private $_bdd;

	function __construct($bdd){
		$this->_bdd = $bdd;
	}
	function creer($utlisateur){
		try{
			$stmtInsertionUtilisateur = $this->_bdd->prepare("INSERT INTO utilisateur (pseudo, mdp, mail) VALUES (:pseudo, :password, :email)");
			$stmtInsertionUtilisateur->bindValue(':pseudo', $utlisateur->getPseudo());
			$stmtInsertionUtilisateur->bindValue(':password', $utlisateur->getPassword());
			$stmtInsertionUtilisateur->bindValue(':email', $utlisateur->getEmail());
			return $stmtInsertionUtilisateur->execute();
			}
		catch(PDOException $e){
			throw($e);
		}
		
	}
	
	function trouver($pseudo){
		try{
			$stmtTrouverUtilisateur = $this->_bdd->prepare("SELECT pseudo FROM utilisateur WHERE pseudo = :pseudo");
			$stmtTrouverUtilisateur->bindValue(':pseudo', $pseudo);
			$stmtTrouverUtilisateur->execute();
			$result = $stmtTrouverUtilisateur->fetch(PDO::FETCH_ASSOC);
			if(isset($result["pseudo"])){
				return true;
			}
			return false;
		}
		catch(PDOException $e){
			throw($e);
		}
	}
	
	function recuperer($pseudo, $password){
		try{
			$stmtPseudoPassword = $this->_bdd->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo AND mdp = :password");
			$stmtPseudoPassword ->bindValue(':pseudo', $pseudo);
			$stmtPseudoPassword ->bindValue(':password', $password);
			$stmtPseudoPassword ->execute();
			$result = $stmtPseudoPassword ->fetch(PDO::FETCH_ASSOC);
			if(isset($result["pseudo"])){;
    			return new Utilisateur($result["pseudo"], NULL,$result["mail"]); // on retourne un utilisateur avec un mot de passe à NULL
			}
			return NULL;
		}
		catch(PDOException $e){
			throw($e);
		}
	}
}
	
?>