<?php 

class construct_Suivi {
	private $id;
	private $commentaire;
	
	//constructeur de la classe
	function __construct($p_id, $p_commentaire) {
		$this->id = $p_id;
		$this->commentaire = $p_commentaire;	
	}
	
	// get envoi
	public function __get($property) {
		if(property_exists($this, $property)){
			return $this->$property;		
		}	
	}
	
	//set stock la valeur
	public function __set($property, $value) {
		if(property_exists($this, $property)){
			$this->$property = $value;		
		}	
	}
}
?>