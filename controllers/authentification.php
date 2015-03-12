<?php

	require_once(_CORE_.'beans/Utilisateur.php');
	require_once("./core/service/GestionAuthentification.php");

   /**
	* Contrôlleur de gestion des demandes de connexion
 	* 
 	* @author Baptiste BOULAY & Jonathan PLAY
 	*/
 
	try{
		// Objet utilisateur et ses informations récupérées si 
		$utilisateur = NULL;

		$pseudo="";
		$password="";

		if(isset($_POST['pseudo']) && isset($_POST['password'])){
			// On récupère les identifiants si possible
			$pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, 'UTF-8');
			$password = htmlentities($_POST['password'], ENT_QUOTES, 'UTF-8');

			echo 'ids récupérés!';
			// On vérifie la validité des identifiants et on récupère les informations sur l'utilisateur
			$utilisateur = GestionAuthentification::authentUtilisateur($pseudo, $password);

			if($utilisateur != NULL){
				$_SESSION["pseudo"] = utilisateur->getPseudo();
				$_SESSION["mail"] = utilisateur->getMail();
				echo 'identifiants OK, session initialisée';
			}
			else{
				echo 'isset marche pas ...';
				// Les identifiants sont invalides
				// TODO : afficher une erreur au client
			}
		}
		else{
			//echo 'Identifiants non-renseignés';
		}
	}
	catch(Exception $e)
    {
    	// TODO : rediriger vers une page d'exception avec redirect ou 
    }

?>