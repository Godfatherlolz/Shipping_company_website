<?php

class livreur{
	private $nom;
	private $prix;
	private $image;
    private $mail;
	function __construct($nom,$prix,$mail,$image){
		
		$this->nom=$nom;
		$this->prix=$prix;
		$this->mail=$mail;
		$this->image=$image;
		
		
	}
	
	function getnom(){
		return $this->nom;
		
	}
	function getprix(){
		return $this->prix;
		
	}
	function getmail(){
		return $this->mail;
		
	}
		
	function getimage(){
		return $this->image;
		
	}	
	function getdesc(){
		return $this->desc;
		
	}	
	
}

?>