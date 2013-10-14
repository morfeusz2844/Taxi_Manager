<?php
require ('/pozycja.php')
class Cel extends Pozycja{
	private $_cel = null;
	
	public function __construct($cel,$wspx,$wspy){
		$this->_cel = $cel;
		Pozycja($wspx,$wspy);
	}
}