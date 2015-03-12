<?php 

   /**
	* Contrôlleur de gestion des inscriptions
 	* 
 	* @author Baptiste BOULAY & Jonathan PLAY
 	*/
	try{
		$pseudo="";
		if (isset($_POST['input_pseudo'])){
			$pseudo = htmlentities($_POST['input_pseudo'], ENT_QUOTES, 'UTF-8');
		}
        
		$password="";
    	if (isset($_POST['input_mdp'])){
    		$password = htmlentities($_POST['input_mdp'], ENT_QUOTES, 'UTF-8');
    		// TODO crypter le mot de passe 
		} 
		
		$email="";
    	if (isset($_POST['input_mail'])){
    		$mail = htmlentities($_POST['input_mail'], ENT_QUOTES, 'UTF-8');
    		// TODO rajouter une regex pour tester la validité
		}       
	
		// Si le pseudo, le mot de passe  et le mail sont renseignés
		if(($pseudo != "") && ($password != "") && ($email != "")){
		
			if(GestionInscription::inscriptionUtilisateur($pseudo, $password, $email)
				$_SESSION["pseudo"] = $pseudo;
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