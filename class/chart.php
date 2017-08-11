<?php
class chart{
	//attributs

	

	private $id_chart;
	private $name;
	private $textchart;

	
	
	
	
	//constructeur
	function __construct($name,$textchart){
		
		//$this->id_chart=$id_chart;
		$this->name=$name;
		$this->textchart=$textchart;
		
	}
	
	
	function getid_chart(){
		return $this->id_chart;
	}
	function getName(){
		return $this->name;
	}
	function getTextchart(){
		return $this->textchart;
	}

	

}


?>