<?php

   /**
	* Contrôlleur de gestion des inscriptions
 	* 
 	* @author Baptiste BOULAY & Jonathan PLAY
 	*/
	try{
		$username="";
		if (isset($_POST['input_pseudo'])){
			$username = htmlentities($_POST['input_pseudo'], ENT_QUOTES, 'UTF-8');
		}
        
		$password="";
    	if (isset($_POST['input_mdp'])){
    		$password = htmlentities($_POST['input_mdp'], ENT_QUOTES, 'UTF-8');
    		// TODO crypter le mot de passe 
		} 
		
		$mail="";
    	if (isset($_POST['input_mail'])){
    		$mail = htmlentities($_POST['input_mail'], ENT_QUOTES, 'UTF-8');
    		// TODO rajouter une regex pour tester la validité
		}       
	
		// Si le pseudo, le mot de passe  et le mail sont renseignés
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
		else{
			echo 'Informations non-renseignées';
		}
	}
	catch(PDOException $e)
    {
    	echo "Error: " . $e->getMessage();
    }

?>