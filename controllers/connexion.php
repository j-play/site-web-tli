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
			$stmt = $bdd->prepare("SELECT 'pseudo' from utilisateur where 'pseudo' = :username and 'mdp' = :password");
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':password', $password);
			$stmt->execute();
		
			/*$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    		foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        		echo $v;
    		}*/
		
		
			/*$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			if(!isset($result["pseudo"])){
				echo $result;
    			echo "empty";
			}
			else{
				echo $result["pseudo"];
    			$_SESSION["username"] = $result["pseudo"];
			}*/
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