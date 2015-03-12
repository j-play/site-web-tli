<?php

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
		$pseudo = validerPseudo($pseudo);
		$password = validertPassword($password); 
		$email = validerPseudo($email);
		if(($pseudo != NULL) && ($password != NULL) && ($mail != NULL)){
			$bdd = new Database();
			$daoUtilisateur = new UtilisateurDAO($bdd);
			if($daoUtilisateur->trouver($pseudo)){
				$utilisateur = new Utilisateur($pseudo, $password, $email);
				return $daoUtilisateur->creer($utlisateur);
			}
		}
		return false;
	}

	/**
	*Valider si le pseudo est correct (pseudo non vide  ...)
	*@param String $pseudo Pseudo de l'utilisateur
	*@return pseudo| NULL renvoie $pseudo sécurisé contre les injections sql renvoie NULL si le pseudo ne correspond pas aux critères
	*/
	private function validerPseudo($pseudo)
	{
		if(($pseudo != ""){
			return htmlentities($pseudo, ENT_QUOTES, 'UTF-8');
		}
		return NULL;
	}
	
	/**
	*Valider si le password est correct (password non vide  ...)
	*@param String $password Password de l'utilisateur
	*@return password| NULL renvoie $password sécurisé contre les injections sql renvoie NULL si le password ne correspond pas aux critères
	*/
	private function validerPassword($password)
	{
		if(($password != ""){
			return htmlentities($password, ENT_QUOTES, 'UTF-8');
		}
		return NULL;
	}
	
	/**
	*Valider si le email est correct (email non vide  ...)
	*@param String $email Email de l'utilisateur
	*@return email| NULL renvoie $email sécurisé contre les injections sql renvoie NULL si le email ne correspond pas aux critères
	*/
	private function validerPseudo($email)
	{
		if(($email != ""){
			return htmlentities($email, ENT_QUOTES, 'UTF-8');
		}
		return NULL;
	}
}
	
?>