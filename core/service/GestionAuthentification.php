<?php

	require_once(_CORE_.'beans/Utilisateur.php');
	require_once(_CORE_.'dao/UtilisateurDAO.php');
	require_once(_CORE_.'util/Database.php');

	/**
	 * Classe utilitaire permettant la gestion de l'athentification d'un utilisateur
	 * 
	 * @author Jonathan PLAY & Baptiste BOULAY
	 */
	class GestionAuthentification{
		
	   /**
	 	* Vérifie la validité des identifiants
	 	* @param String $pseudo Pseudo de l'utilisateur
	 	* @param String $password Mot de passe de l'utilisateur
	 	* @return Utilisateur|NULL $utilisateur Renvoie un objet Utilisateur et ses informations si les identifiants 
	 	* sont valides, NULL sinon 
	 	*/
		public static function authentUtilisateur($pseudo, $password){
			try{
				$bdd = new Database();
				$daoUtilisateur = new UtilisateurDAO($bdd);
				$utilisateur = NULL;
				$utilisateur = $daoUtilisateur->recuperer($pseudo, $password);

				return $utilisateur;
			}
			catch(Exception $e){
				throw($e);
			}
		}

			
	}
	
?>