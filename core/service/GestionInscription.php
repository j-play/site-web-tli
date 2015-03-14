<?php

require_once(_CORE_.'beans/Utilisateur.php');
require_once(_CORE_.'dao/UtilisateurDAO.php');
require_once(_CORE_.'util/Database.php');
/**
 * Classe service permettant d'inscrire un utlisateur
 *
 *@author Jonathan Play & Baptiste BOULAY 
 */
class GestionInscription {
	
	/**
	*Créer un utilisateur si l'ensemble des paramètres sont corrects
	*@param String $pseudo Pseudo de l'utilisateur
	*@param String $password Mot de passe de l'utilisateur
	*@param String $email email de l'utlisateur
	*@return Utilisateur| NULL $utilisateur si l'inscription s'est bien déroulée, NULL si l'utilisateur ne correspond pas à tout les critères
	*/
	public static function inscriptionUtilisateur($pseudo, $password, $email){
		$pseudo = GestionInscription::validerPseudo($pseudo);
		$password = GestionInscription::validerPassword($password); 
		$email = GestionInscription::validerEmail($email);
		if(($pseudo != NULL) && ($password != NULL) && ($email != NULL)){
			$bdd = new Database();
			$daoUtilisateur = new UtilisateurDAO($bdd);
			if(!$daoUtilisateur->trouver($pseudo)){
				$utilisateur = new Utilisateur($pseudo, $password, $email);			
				return $daoUtilisateur->creer($utilisateur);
			}
		}
		return false;
	}

	/**
	*Valider si le pseudo est correct (pseudo non vide  ...)
	*@param String $pseudo Pseudo de l'utilisateur
	*@return pseudo| NULL renvoie $pseudo sécurisé contre les injections sql renvoie NULL si le pseudo ne correspond pas aux critères
	*/
	private static function validerPseudo($pseudo)
	{
		if(isset($pseudo) && !empty($pseudo)){
			return htmlentities($pseudo, ENT_QUOTES, 'UTF-8');
		}
		return NULL;
	}
	
	/**
	*Valider si le password est correct (password non vide  ...)
	*@param String $password Password de l'utilisateur
	*@return password| NULL renvoie $password sécurisé contre les injections sql renvoie NULL si le password ne correspond pas aux critères
	*/
	private static function validerPassword($password)
	{
		if(isset($password) && !empty($password)){
			return htmlentities($password, ENT_QUOTES, 'UTF-8');
		}
		return NULL;
	}
	
	/**
	*Valider si le email est correct (email non vide  ...)
	*@param String $email Email de l'utilisateur
	*@return email| NULL renvoie $email sécurisé contre les injections sql renvoie NULL si le email ne correspond pas aux critères
	*/
	private static function validerEmail($email)
	{
		if(isset($email) && !empty($email)){
			return htmlentities($email, ENT_QUOTES, 'UTF-8');
		}
		return NULL;
	}
}
	
?>