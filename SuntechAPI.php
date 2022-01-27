<?php


include_once 'src/Stc.php';
require_once 'src/entities/Client.php';

class SuntechAPI {

	public $stc;

	public function __construct($options) 
	{
		//criando objeto stc
		$this->stc = new Stc($options);
	}
	

}