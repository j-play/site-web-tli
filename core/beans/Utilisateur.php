<?php
class Utilisateur {
	private $_pseudo;
	private $_password;
	private $_email;

	public function __construct($pseudo, $password, $email)
	{
		$this->setPseudo($pseudo);
		$this->setPassword($password); 
		$this->setEmail($email);
	}

	public function setPseudo($pseudo)
	{
		$this->_pseudo = htmlentities($pseudo, ENT_QUOTES, 'UTF-8');
	}
	
	public function setPassword($password)
	{
		$this->_password = htmlentities($password, ENT_QUOTES, 'UTF-8');
	}
	
	public function setEmail($email)
	{
		$this->_email = htmlentities($email, ENT_QUOTES, 'UTF-8');
	}
	
	public function getPseudo()
	{	
		return $this->_pseudo;
	}
	
	public function getPassword()
	{
		return $this->_password;
	}
	
	public function getEmail()
	{
		return $this->_email;
	}
		
}
	
?>