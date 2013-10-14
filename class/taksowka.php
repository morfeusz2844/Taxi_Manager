<?php

class Taksowka {
	private $_nazwa = null;
	private $_paliwo = null;
	private $_zmeczenie = null;
	
	public function __construct($nazwa,$paliwo,$zmecznie) {
		$this->_nazwa = $nazwa;
		$this->_paliwo = $paliwo;
		$this->_zmecznie = $zmeczenie;
	}
	public function getNazwa(){
		return $this->_nazwa;
	}
	public function getPaliwo(){
		return $this->_paliwo;
	}
	public function getZmeczenie(){
		return $this->_zmeczenie;
	}
}