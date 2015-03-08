<?php

   /**
	* Contrôlleur de gestion des demandes de connexion
 	* 
 	* @author Baptiste BOULAY & Jonathan PLAY
 	*/
	try{
		$username="";
		if (isset($_POST['username'])){
			$numeroRue = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
		}
        
		$password="";
    	if (isset($_POST['password'])){
    		$password = htmlentities($_POST['password'], ENT_QUOTES, 'UTF-8');
		}       
	
		// Si le pseudo et le mot de passe sont renseignés, on procède à la vérification en base
		if(($username != "") && ($password != "")){
			$stmt = $bdd->prepare("SELECT 'pseudo' from utilisateur where 'pseudo' = :username and 'mdp' = :password");
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':username', $pseudo);
			$stmt->execute();
		
			$result = $sth->fetch(PDO::FETCH_OBJ)

			if(!isset($result->pseudo)){
    			echo "empty";
			}
			else{
    			$_SESSION[username] = $result->pseudo;
			}
		}
	catch(PDOException $e)
    {
    	//echo "Error: " . $e->getMessage();
    }