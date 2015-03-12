<?php
class inscription {
	private $_pseudo;
	private $_password;
	private $_email;
	private $_resultat;
	private $_erreurs;

	public String getResultat() {
    return resultat;
	}

	public Map<String, String> getErreurs() {
    	return erreurs;
	}
	public function __construct($pseudo, $password, $email)
	{
		$this->setPseudo($pseudo);
		$this->setPassword($password); 
		$this->setPseudo($email);
		if(($username != "") && ($password != "") && ($mail != "")){
		
			//on verifie que une autre utilisateur ne possède pas déja le même pseudo
			$stmtTestUtilisateur = $bdd->prepare("SELECT pseudo FROM utilisateur WHERE pseudo = :username");
			$stmtTestUtilisateur->bindValue(':username', $username);
			$stmtTestUtilisateur->execute();
			$resultTest = $stmtTestUtilisateur->fetch(PDO::FETCH_ASSOC);
			if(!isset($resultTest["pseudo"])){;
    			$stmtInsertionUtilisateur = $bdd->prepare("INSERT INTO utilisateur (pseudo, mdp, mail) VALUES (:username, :password, :email)");
				$stmtInsertionUtilisateur->bindValue(':username', $username);
				$stmtInsertionUtilisateur->bindValue(':password', $password);
				$stmtInsertionUtilisateur->bindValue(':email', $mail);
				$stmtInsertionUtilisateur->execute();
				$_SESSION["username"] = $username;
			}
			else{
    			echo "Un autre utilisateur a déja ce pseudo.";
			}
		}
	}

	public function setPseudo($pseudo)
	{
		$this->_pseudo = htmlentities($pseudo, ENT_QUOTES, 'UTF-8');
	}
	
	public function setPassword($password)
	{
		$this->_password = htmlentities($password, ENT_QUOTES, 'UTF-8');
	}
	
	public function setPseudo($email)
	{
		$this->_email = htmlentities($email, ENT_QUOTES, 'UTF-8');
	}
		
}
	
?>