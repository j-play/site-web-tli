<?php
	require_once(_CORE_.'util/DatabaseConfiguration.php');
	class Database extends PDO {
	    public function __construct() {
	        parent::__construct(
	            DatabaseConfiguration::DRIVER.':host='.DatabaseConfiguration::SERVER.';dbname='.DatabaseConfiguration::DATABASE,
	            DatabaseConfiguration::LOGIN,
	            DatabaseConfiguration::PASSWORD
	        );
	    }
	}
?>