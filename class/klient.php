<?php
require ('/pozycja.php');
class Klient extends Pozycja{
	private $_nazwa = null;
	private $_cel = null;
	
	public function __construct($nazwa,$cel,$wspx,$wspy){
		$this->_nazwa = $nazwa;
		$this->_cel = $cel;
		Pozycja($wspx,$wspy);
	}
}
