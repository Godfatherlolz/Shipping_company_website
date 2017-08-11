<?php
class uptime{
	//attributs

	

	private $id_uptime;
	private $monday1;
	private $monday2;
	private $saturday1;
	private $saturday2;
	private $sunday1;
	private $sunday2;

	
	
	
	
	//constructeur
	function __construct($monday1,$monday2,$saturday1,$saturday2,$sunday1,$sunday2){
		
	
		$this->monday1=$monday1;
		$this->monday2=$monday2;
		$this->saturday1=$saturday1;
		$this->saturday2=$saturday2;
		$this->sunday1=$sunday1;
		$this->sunday2=$sunday2;
		
		
	}
	
	function getid_uptime(){
		return $this->id_uptime;
	}
	function getmonday1(){
		return $this->monday1;
	}
	function getmonday2(){
		return $this->monday2;
	}
	function getsaturday1(){
		return $this->saturday1;
	}
	function getsaturday2(){
		return $this->saturday2;
	}
	function getsunday1(){
		return $this->sunday1;
	}
	function getsunday2(){
		return $this->sunday2;
	}
	

	

}


?>