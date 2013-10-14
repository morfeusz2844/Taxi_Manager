<?php
class Pozycja {	
	private $_wspx = null;
	private $_wspy = null;
	
	public function __construct($wspx,$wspy){
		$this->_wspx = $wspx;
		$this->_wspy = $wspy;
	}
	public function getWspx() {
		return $this->_wspx;
	}
	public function getWspy() {
		return $this->_wspy;
	}
}
