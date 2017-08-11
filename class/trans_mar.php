<?php

class trans_mar {


	public $idc;
	public $nbr;
	public $poids;
	public $type;
  public $temperature;




	public function __construct($idc,$nbr,$poids,$type,$temperature)
	{


			$this->idc=$idc;
		  $this->nbr=$nbr;
			$this->poids=$poids;
			$this->type=$type;
			$this->temperature=$temperature;


	}


	public function getidc(){
		return $this->idc;
	}
	public function getnbr(){
		return $this->nbr;
	}
	public function getpoids(){
		return $this->poids;
	}
	public function gettype(){
		return $this->type;
	}
	public function gettemperature(){
		return $this->temperature;
	}




	/*setters*/

}
?>
