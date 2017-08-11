<?php

class col_mar {


	public $idcc;
	public $nbrc;
	public $poidsc;
	public $typec;
	public $typecc;
  public $gerbablec;




	public function __construct($idcc,$nbrc,$poidsc,$typec,$typecc,$gerbablec)
	{


			$this->idcc=$idcc;
		  $this->nbrc=$nbrc;
			$this->poidsc=$poidsc;
			$this->typec=$typec;
			$this->typecc=$typecc	;
			$this->gerbablec=$gerbablec;


	}


	public function getidcc(){
		return $this->idcc;
	}
	public function getnbrc(){
		return $this->nbrc;
	}
	public function getpoidsc(){
		return $this->poidsc;
	}
	public function gettypec(){
		return $this->typec;
	}
	public function gettypecc(){
		return $this->typecc;
	}
	public function getgerbablec(){
		return $this->gerbablec;
	}





	/*setters*/

}
?>
