<?php
class blog{
	//attributs

	
	private $title;
	private $text;
	private $author;
private $image;
private $shorttitle;
	
	
	//constructeur
	function __construct($title,$text,$author,$image,$shorttitle){
		$this->title=$title;
		$this->author=$author;
		$this->text=$text;
		$this->image=$image;
		$this->shorttitle=$shorttitle;
	
	}
	function getTitle(){
		return $this->title;
	}
	function getAuthor(){
		return $this->author;
	}
	function getText(){
		return $this->text;
	}
	
	function getImage(){
		return $this->image;
	}
	function getShorttitle(){
		return $this->shorttitle;
	}
	

}


?>