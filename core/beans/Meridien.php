<?php
class Meridien {
    
    // Attributs
	private $_code;
	private $_nom;
	private $_element;
    private $_yin;

    // Constructeur
	public function __construct($code, $nom, $element, $yin){
		$this->_code = $code;
        $this->_nom = $nom;
        $this->_element = $element;
        $this->_yin = $yin;
	}

    // Getter
	public function __get($property){ 
        if (property_exists($this, $property)){ 
            return $this->$property; 
        } 
    } 
    
    // Setter
    public function __set($property, $value){ 
        if (property_exists($this, $property)){ 
            $this->$property = $value; 
        } 
    }
	
}
	
?>