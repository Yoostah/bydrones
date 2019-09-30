<?php
class Model {

	protected $db;

	public function __construct() {
		global $db;
		$this->db = $db;
	}

	public function _pp($string){
		echo '<pre>';
		print_r($string);
		echo '</pre>';
	}

}