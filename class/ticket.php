<?php

class ticket {

	private $id_ticket;
	private $id_user;
	private $name;
	private $email;
	private $text;
	private $state;

	

	public function __construct( $id_user,$name,$email,$text ,$state)
	{
		 
		 $this->id_user=$id_user;
		 $this->name=$name;
		  $this->email=$email;
		  $this->text=$text;
		  $this->state=$state;
		  
		  
	}

	
	public function getid_ticket(){
		return $this->id_ticket;
	}
	public function getid_user(){
		return $this->id_user;
	}
	public function getname(){
		return $this->name;
	}
	public function getemail(){
		return $this->email;
	}
	public function gettext(){
		return $this->text;
	}
	public function getstate(){
		return $this->state;
	}

	/*setters*/

}
?>