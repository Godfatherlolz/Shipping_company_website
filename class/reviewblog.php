<?php
class reviewsblog{
	//attributs

	
	private $id_product;
	private $name;
	private $summary;
	private $review;

	
	
	
	
	//constructeur
	function __construct($id_product,$name,$summary,$review){
		$this->id_product=$id_product;
		$this->name=$name;
		$this->summary=$summary;
		$this->review=$review;
		
		
		
		
	}
	function getId_product(){
		return $this->id_product;
	}
	function getName(){
		return $this->name;
	}
	function getSummary(){
		return $this->summary;
	}
	function getReview(){
		return $this->review;
	}
	

}


?>