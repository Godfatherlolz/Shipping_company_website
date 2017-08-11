<?php
class reviews{
	//attributs

	
	private $id_product;
	private $name;
	private $summary;
	private $review;
	private $rating;
	
	
	
	
	//constructeur
	function __construct($id_product,$name,$summary,$review,$rating){
		$this->id_product=$id_product;
		$this->name=$name;
		$this->summary=$summary;
		$this->review=$review;
		
		$this->rating=$rating;
		
		
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
	function getRating(){
		return $this->rating;
	}
	

}


?>