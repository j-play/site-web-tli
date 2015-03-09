<?php

   /**
	* Contrôlleur de gestion des demandes de connexion
 	* 
 	* @author Baptiste BOULAY & Jonathan PLAY
 	*/
 
	try{
		$username="";
		if (isset($_POST['username'])){
			$username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
		}
        
		$password="";
    	if (isset($_POST['password'])){
    		$password = htmlentities($_POST['password'], ENT_QUOTES, 'UTF-8');
		}       
	
		// Si le pseudo et le mot de passe sont renseignés, on procède à la vérification en base
		if(($username != "") && ($password != "")){
			$stmt = $bdd->prepare("SELECT * FROM utilisateur WHERE pseudo = :username AND mdp = :password");
			$stmt->bindValue(':username', $username);
			$stmt->bindValue(':password', $password);
			$stmt->execute();
	
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			if(!isset($result["pseudo"])){;
    			echo "Aucun utilisateur avec ce pseudo et ce mot de passe.";
			}
			else{
    			$_SESSION["username"] = $result["pseudo"];
			}
		}
		else{
			echo 'Identifiants non-renseignés';
		}
	}
	catch(PDOException $e)
    {
    	//echo "Error: " . $e->getMessage();
    }

?>