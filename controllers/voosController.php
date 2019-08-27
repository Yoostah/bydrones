<?php
class voosController extends controller {

	public function index() {
		$dados = array();
		$this->loadTemplate('voos', $dados);

	}	

}